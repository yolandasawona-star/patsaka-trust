-- Patsaka Trust Database Schema
-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS patsaka_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE patsaka_db;

-- Create thematic_areas table
CREATE TABLE IF NOT EXISTS thematic_areas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create stories table
CREATE TABLE IF NOT EXISTS stories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    location VARCHAR(255) NOT NULL,
    published_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create quotes table
CREATE TABLE IF NOT EXISTS quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    story_id INT NOT NULL,
    speaker_name VARCHAR(100) NOT NULL,
    quote_text TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (story_id) REFERENCES stories(id) ON DELETE CASCADE
);

-- Seed thematic areas
INSERT INTO thematic_areas (name, description) VALUES
('Inclusive Education', 'Promoting access to quality education for marginalized communities and ensuring equal learning opportunities for all.'),
('Youth Development', 'Empowering young people with skills, knowledge, and opportunities to become active participants in sustainable development.'),
('Women\'s Emancipation', 'Advocating for gender equality, women\'s rights, and empowering women to take leadership roles in their communities.'),
('Climate Change', 'Building climate resilience and promoting environmental sustainability through community-based initiatives.'),
('Media and Communication', 'Enhancing access to information and strengthening community voices through effective communication strategies.');

-- Seed the impact story
INSERT INTO stories (title, content, location, published_date) VALUES
(
    'ACCESS TO INFORMATION IS KEY TO DEVELOPMENT',
    'In Kariba\'s Nyamiminyami Rural District ward 2, Quarry compound, women faced significant challenges due to restricted access to information and inadequate water sources. For years, these women drank from shallow wells, competing with wild animals like elephants for this precious resource. The situation was dire, but the community felt powerless to address their struggles.

    Following a December 2024 community leadership training conducted by Patsaka Trust in partnership with IYWD (Institute for Young Women Development), the women discovered that their invisible ward Councilor was the root cause of their prolonged suffering. The training empowered them with knowledge about their rights and the responsibilities of their elected representatives.

    Armed with this newfound awareness, the women formed a committee to visit the Councilor and demand accountability. They also planned to use the local Kasambabezi FM radio station to publicly hold him accountable, ensuring their voices would be heard throughout the community. This collective action demonstrates how access to information can transform passive victims into active agents of change in their communities.',
    'Kariba\'s Nyamiminyami Rural District ward 2, Quarry compound',
    '2024-12-15'
);

-- Get the story ID for the quote
SET @story_id = LAST_INSERT_ID();

-- Seed the quote
INSERT INTO quotes (story_id, speaker_name, quote_text) VALUES
(
    @story_id,
    'Florence Nyamaropa',
    'We are very angry, this time \'naye nemumvura mese\' a Shona phrase meaning we will not leave him until he is accountable. If it was not a community level training by Patsaka Trust we were going to remain in darkness...'
);
