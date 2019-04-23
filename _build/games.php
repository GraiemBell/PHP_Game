<?php
// Attogram Games Website Configuration

// HTML <title>
$title = 'Attogram Games Website';

// HTML <h1>
$headline = 'Attogram Games Website';

// The Ordered List of Games
$games = [
    'hextris' => [
        'name'    => 'Hextris',
        'tag'     => 'hexagonal tetris',
        'git'     => 'https://github.com/Hextris/hextris.git',
        'mobile'  => true,
        'desktop' => true,

    ],
    'hyperspace-garbage-collection' => [
        'name'    => 'Hyperspace G',
        'tag'     => 'collect garbage',
        'git'     => 'https://github.com/razh/game-off-2013',
        'mobile'  => true,
        'desktop' => true,
    ],
    'pond' => [
        'name'    => 'The Pond',
        'tag'     => 'eat, swim, love',
        'git'     => 'https://github.com/Zolmeister/pond.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    '2048' => [
        'name'    => '2048',
        'tag'     => '2, 4, 8, swipe',
        'git'     => 'https://github.com/gabrielecirulli/2048',
        'mobile'  => true,
        'desktop' => true,
    ],
    'taptaptap' => [
        'name'    => 'Tap Tap Tap',
        'tag'     => 'tap the blue',
        'git'     => 'https://github.com/MahdiF/taptaptap.git',
        'index'   => 'play/index.html',
        'mobile'  => true,
        'desktop' => true,
    ],
    'klotski' => [
        'name'    => 'Klotski',
        'tag'     => 'free the block',
        'git'     => 'https://github.com/SimonHung/Klotski',
        'index'   => 'klotski.puzzle.html',
        'mobile'  => true,
        'desktop' => true,
    ],
    'particle-clicker' => [
        'name'    => 'Particle Clicker',
        'tag'     => 'be like CERN',
        'git'     => 'https://github.com/particle-clicker/particle-clicker.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'missile-game' => [
        'name'    => 'Missile Game',
        'tag'     => 'fly thru',
        'git'     => 'https://github.com/bwhmather/missile-game.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'chess' => [
        'name'    => 'Chess',
        'tag'     => 'e2 to e4',
        'git'     => 'https://github.com/kbjorklu/chess.git',
        'index'   => 'chess.html',
        'mobile'  => true,
        'desktop' => true,
    ],
    '8queens' => [
        'name'     => '8 Queens',
        'tag'      => 'chess puzzle',
        'git'      => 'https://github.com/attogram/8queens.git',
        'composer' => true,
        'mobile'   => false,
        'desktop'  => true,
    ],
    'html5-asteroids' => [
        'name'    => 'Asteroids',
        'tag'     => 'retro asteroids',
        'git'     => 'https://github.com/dmcinnes/HTML5-Asteroids.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'raging-gardens' => [
        'name'    => 'Raging Gardens',
        'tag'     => 'farting ninja rabbits',
        'git'     => 'https://github.com/alunix/RagingGardensFB.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'polybranch' => [
        'name'    => 'PolyBranch',
        'tag'     => 'fly thru trees',
        'git'     => 'https://github.com/gbatha/PolyBranch',
        'index'   => 'polybranchweb/index.html',
        'mobile'  => false,
        'desktop' => true,
    ],
    'pacman' => [
        'name'    => 'pacman',
        'tag'     => 'eat the dots',
        'git'     => 'https://github.com/mumuy/pacman.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'dead-valley' => [
        'name'    => 'Dead Valley',
        'tag'     => 'survival',
        'git'     => 'https://github.com/dmcinnes/dead-valley.git',
        'mobile'  => false,
        'desktop' => true,
    ],
# HexGL temporarily out of order
#    'hexgl' => [
#        'name'    => 'HexGL',
#        'tag'     => 'racing pod',
#        'git'     => 'https://github.com/BKcore/HexGL.git',
#        'mobile'  => false,
#        'desktop' => true,
#    ],
    'phaser-piano' => [
        'name'    => 'Piano',
        'tag'     => 'ting ting',
        'git'     => 'https://github.com/wasi0013/Phaser-Piano.git',
        'index'   => 'Ting%20Ting/index.html',
        'mobile'  => false,
        'desktop' => true,
    ],
    'classic-pool' => [
        'name'    => 'Pool',
        'tag'     => 'classic 8-ball',
        'git'     => 'https://github.com/henshmi/Classic-Pool-Game.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'twisty-polyhedra' => [
        'name'    => 'Twisty P',
        'tag'     => 'polyhedra turning',
        'git'     => 'https://github.com/aditya-r-m/twisty-polyhedra.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'loderunner_totalrecall' => [
        'name'    => 'Lode Runner',
        'tag'     => 'run, dig, old style',
        'git'     => 'https://github.com/SimonHung/LodeRunner_TotalRecall.git',
        'index'   => 'lodeRunner.html',
        'mobile'  => false,
        'desktop' => true,
    ],
    'underrun' => [
        'name'    => 'Underrun',
        'tag'     => 'run &amp; fight',
        'git'     => 'https://github.com/phoboslab/underrun',
        'index'   => 'index-debug.html',
        'mobile'  => false,
        'desktop' => true,
    ],
];
