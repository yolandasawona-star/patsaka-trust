<?php
/**
 * Database Configuration and Connection
 * Patsaka Trust Advocacy Platform
 */

// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_NAME', 'patsaka_db');
define('DB_USER', 'root'); // Change this to your database username
define('DB_PASS', ''); // Change this to your database password
define('DB_CHARSET', 'utf8mb4');

/**
 * Create PDO database connection
 * @return PDO Database connection object
 * @throws PDOException If connection fails
 */
function getDbConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_PERSISTENT => true
        ];
        
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
    } catch (PDOException $e) {
        // Log error and display user-friendly message
        error_log("Database connection failed: " . $e->getMessage());
        die("Sorry, we are experiencing technical difficulties. Please try again later.");
    }
}

/**
 * Execute a prepared statement with optional parameters
 * @param PDO $pdo Database connection
 * @param string $query SQL query
 * @param array $params Parameters for prepared statement
 * @return PDOStatement
 */
function executeQuery($pdo, $query, $params = []) {
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        error_log("Query execution failed: " . $e->getMessage());
        die("Sorry, we encountered an error while processing your request.");
    }
}

/**
 * Fetch all results from a query
 * @param PDO $pdo Database connection
 * @param string $query SQL query
 * @param array $params Parameters for prepared statement
 * @return array Results
 */
function fetchAll($pdo, $query, $params = []) {
    $stmt = executeQuery($pdo, $query, $params);
    return $stmt->fetchAll();
}

/**
 * Fetch single result from a query
 * @param PDO $pdo Database connection
 * @param string $query SQL query
 * @param array $params Parameters for prepared statement
 * @return mixed Single result or false
 */
function fetchOne($pdo, $query, $params = []) {
    $stmt = executeQuery($pdo, $query, $params);
    return $stmt->fetch();
}

/**
 * Get all thematic areas
 * @param PDO $pdo Database connection
 * @return array Thematic areas
 */
function getThematicAreas($pdo) {
    $query = "SELECT id, name, description FROM thematic_areas ORDER BY name";
    return fetchAll($pdo, $query);
}

/**
 * Get all stories with their quotes
 * @param PDO $pdo Database connection
 * @return array Stories with associated quotes
 */
function getStoriesWithQuotes($pdo) {
    $query = "SELECT s.id, s.title, s.content, s.location, s.published_date,
                     GROUP_CONCAT(
                         CONCAT(q.speaker_name, ':', q.quote_text) 
                         SEPARATOR '|||'
                     ) as quotes
              FROM stories s
              LEFT JOIN quotes q ON s.id = q.story_id
              GROUP BY s.id, s.title, s.content, s.location, s.published_date
              ORDER BY s.published_date DESC";
    
    $stories = fetchAll($pdo, $query);
    
    // Process quotes for each story
    foreach ($stories as &$story) {
        $story['quotes_array'] = [];
        if (!empty($story['quotes'])) {
            $quoteItems = explode('|||', $story['quotes']);
            foreach ($quoteItems as $quoteItem) {
                $parts = explode(':', $quoteItem, 2);
                if (count($parts) === 2) {
                    $story['quotes_array'][] = [
                        'speaker_name' => $parts[0],
                        'quote_text' => $parts[1]
                    ];
                }
            }
        }
        unset($story['quotes']); // Remove the concatenated quotes field
    }
    
    return $stories;
}

/**
 * Get a single story by ID with its quotes
 * @param PDO $pdo Database connection
 * @param int $storyId Story ID
 * @return mixed Story data or false
 */
function getStoryById($pdo, $storyId) {
    $query = "SELECT s.id, s.title, s.content, s.location, s.published_date
              FROM stories s
              WHERE s.id = :id";
    
    $story = fetchOne($pdo, $query, ['id' => $storyId]);
    
    if ($story) {
        $quotesQuery = "SELECT speaker_name, quote_text 
                       FROM quotes 
                       WHERE story_id = :story_id 
                       ORDER BY created_at";
        $story['quotes'] = fetchAll($pdo, $quotesQuery, ['story_id' => $storyId]);
    }
    
    return $story;
}
?>
