CREATE DATABASE IF NOT EXISTS random_challenge;

USE random_challenge;

CREATE TABLE IF NOT EXISTS challenges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50) NOT NULL,
    title VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL
);

INSERT INTO challenges (category, title, description) VALUES

('Outdoors',
 'Nature Detective',
 'Go outside and find something in nature you have never noticed before. Take a picture of it.'),

('Outdoors',
 'Leaf Hunt',
 'Find three different types of leaves and compare their shapes.'),

('Outdoors',
 'Color Hunt',
 'Go outside and find five different colors in nature.'),

('Creative',
 'No-Lift Drawing',
 'Draw something without lifting your pencil from the paper.'),

('Creative',
 'Photo Challenge',
 'Take five interesting photos using only your phone.'),

('Creative',
 'New Outfit',
 'Create an outfit using three things you have not worn in six months.'),

('Active',
 'Dance Break',
 'Put on your favorite song and dance until the song ends.'),

('Active',
 'Walk and Explore',
 'Take a 20-minute walk and notice five things you normally overlook.'),

('Active',
 'Mini Workout',
 'Do 10 squats, 10 jumping jacks, and 10 lunges.'),

('Friends',
 'Give a Compliment',
 'Give someone a genuine compliment today.'),

('Friends',
 'Phone-Free Game',
 'Play a game with a friend or family member without using phones.'),

('Friends',
 'Ask Something New',
 'Ask a friend a question you have never asked them before.'),

('Food',
 'New Snack',
 'Make a snack you have never tried making before.'),

('Food',
 'Smoothie Creator',
 'Create your own smoothie using ingredients you already have.'),

('Food',
 'Three Ingredients',
 'Find a simple recipe that uses three ingredients you already have.');
