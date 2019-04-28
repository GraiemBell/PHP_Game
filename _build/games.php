<?php
// Attogram Games Website Configuration

// <title> - text only, no HTML
$title = 'Attogram Games Website';

// <h1> - text and/or HTML
$headline = 'Attogram Games Website';

// The Ordered List of Games
$games = [
    'hextris-lite' => [
        'name'    => 'Hextris Lite',
        'tag'     => 'hexagonal tetris',
        'git'     => 'https://github.com/attogram/hextris-lite.git',
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
        'tag'     => 'fly thru it',
        'git'     => 'https://github.com/bwhmather/missile-game.git',
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
    'chess' => [
        'name'    => 'Chess',
        'tag'     => 'e2 to e4',
        'git'     => 'https://github.com/attogram/chess.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    '8queens' => [
        'name'     => '8 Queens',
        'tag'      => 'chess puzzle',
        'git'      => 'https://github.com/attogram/8queens.git',
        'build'    => ['composer install'],
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
    'wolf3d' => [
        'name'    => 'Wolf3d',
        'tag'     => 'classic FPS',
        'git'     => 'https://github.com/jseidelin/wolf3d.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    '3d.city' => [
        'name'    => '3d.city',
        'tag'     => 'be the mayor',
        'git'     => 'https://github.com/lo-th/3d.city.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'phaser-cat' => [
        'name'    => 'Phaser Cat',
        'tag'     => 'fighting feline',
        'git'     => 'https://github.com/DaxChen/phaser-cat.git',
        'build'   => ['npm install', 'npm run deploy'],
        'mobile'  => false,
        'desktop' => true,
    ],
    'hexgl-lite' => [
        'name'    => 'HexGL',
        'tag'     => 'racing pod',
        'git'     => 'https://github.com/attogram/HexGL-lite.git',
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
    'javascript-piano' => [
        'name'    => 'Piano J',
        'tag'     => 'synthy javascript',
        'git'     => 'https://github.com/mrcoles/javascript-piano',
        'mobile'  => true,
        'desktop' => true,
    ],
    'virtual-piano' => [
        'name'    => 'Piano V',
        'tag'     => 'keyboard',
        'git'     => 'https://github.com/otanim/virtual-piano',
        'mobile'  => true,
        'desktop' => true,
    ],
    'phaser-piano' => [
        'name'    => 'Piano P',
        'tag'     => 'ting ting',
        'git'     => 'https://github.com/wasi0013/Phaser-Piano.git',
        'index'   => 'Ting%20Ting/index.html',
        'mobile'  => false,
        'desktop' => true,
    ],
];
