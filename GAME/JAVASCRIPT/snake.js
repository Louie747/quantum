// Board
const playBoard = document.querySelector(".play_board");

// Scoring
const scoreElement = document.querySelector(".score");
const highscoreElement = document.querySelector(".high_score");

// Game over
let gameOver = false;

// Food
let food1X, food1Y;
let food2X, food2Y;

// Snake
let snakeX = 5;
let snakeY = 10;

// Snake body
let snakeBody = [];

// Velocity
let velocityX = 0;
let velocityY = 0;

let setIntervalId;

// Teleportation coordinates
let teleportX;
let teleportY;

// Wall coordinates
let walls = [];
let wallAdded = false;

// Enhancement coordinates
let enhancementX;
let enhancementY;

// Flag to track if the snake has the speed boost
let hasSpeedBoost = false;

// Speed boost
const changeEnhancementPosition = () => {
    enhancementX = Math.floor(Math.random() * 30) + 1;
    enhancementY = Math.floor(Math.random() * 30) + 1;
};



// Function to close the popup
function closePopup() {
    document.querySelector('.overlay').style.display = 'none';
}


const speed = document.getElementById("speed");
const handleEnhancement = () => {
    if (snakeX === enhancementX && snakeY === enhancementY) {
        changeEnhancementPosition();
        score += 5;
        scoreElement.innerText = `Score: ${score}`;
        hasSpeedBoost = true;
        setTimeout(() => {
            hasSpeedBoost = false;
        }, 5000);

        // Play the sound effect when the snake eats speed effect
        speed.play();
    }
};



// Score
let score = 0;
let highscore = localStorage.getItem("high_score") || 0;

const changeFoodPosition = () => {
    food1X = Math.floor(Math.random() * 30) + 1;
    food1Y = Math.floor(Math.random() * 30) + 1;

    food2X = Math.floor(Math.random() * 30) + 1;
    food2Y = Math.floor(Math.random() * 30) + 1;
};

const eatSound = document.getElementById("eatSound");


const gameover = document.getElementById("gameover");

const handleGameOver = () => {
    clearInterval(setIntervalId);
    alert("Game Over! Would you like to play again?");
     // Play the sound effect when the snake eats food
     gameover.play();
};

const changeDirection = (e) => {
    if (e.key === "ArrowUp" && velocityY !== 1) {
        velocityX = 0;
        velocityY = -1;
    } else if (e.key === "ArrowDown" && velocityY !== -1) {
        velocityX = 0;
        velocityY = 1;
    } else if (e.key === "ArrowLeft" && velocityX !== 1) {
        velocityX = -1;
        velocityY = 0;
    } else if (e.key === "ArrowRight" && velocityX !== -1) {
        velocityX = 1;
        velocityY = 0;
    }
    initGame();
};

const changeTeleportPosition = () => {
    teleportX = Math.floor(Math.random() * 30) + 1;
    teleportY = Math.floor(Math.random() * 30) + 1;
};

const changeWallPosition = () => {
    const wallX = Math.floor(Math.random() * 30) + 1;
    const wallY = Math.floor(Math.random() * 30) + 1;
    return { x: wallX, y: wallY };
};

const checkWallCollision = () => {
    for (const wall of walls) {
        if (snakeX === wall.x && snakeY === wall.y) {
            gameOver = true;
        }
    }
};

const handleTeleportation = () => {
    if (snakeX === teleportX && snakeY === teleportY) {
        changeTeleportPosition();
        score += 3;
        scoreElement.innerText = `Score: ${score}`;
        snakeX = Math.floor(Math.random() * 30) + 1;
        snakeY = Math.floor(Math.random() * 30) + 1;

        // Play the sound effect when the snake teleports
        teleport.play();
    }
};

const teleport = document.getElementById("teleport");


const backgroundMusic = document.getElementById("backgroundMusic");

backgroundMusic.volume = 0.1;

const initGame = () => {

    // Start playing the background music when the game starts
    backgroundMusic.play();

    if (gameOver) {
        // Stop the background music when the game is over
        backgroundMusic.pause();
    }


    if (gameOver) return handleGameOver();
    let htmlMarkup = `<div class="food" style="grid-area: ${food1Y} / ${food1X}"></div>`;
    htmlMarkup += `<div class="food" style="grid-area: ${food2Y} / ${food2X}"></div>`;
    htmlMarkup += `<div class="teleport" style="grid-area: ${teleportY} / ${teleportX}"></div>`;

    

    if ((snakeX === food1X && snakeY === food1Y) || (snakeX === food2X && snakeY === food2Y)) {

        // Play the sound effect when the snake eats food
        eatSound.play();

        


        // Identify which food was eaten and update its position
        if (snakeX === food1X && snakeY === food1Y) {
            changeFoodPosition();
            snakeBody.push([food1X, food1Y]);
        } else if (snakeX === food2X && snakeY === food2Y) {
            changeFoodPosition();
            snakeBody.push([food2X, food2Y]);
        }

        score++;
        highscore = score >= highscore ? score : highscore;
        localStorage.setItem("high_score", highscore);
        scoreElement.innerText = `Score: ${score}`;
        highscoreElement.innerText = `High score: ${highscore}`;
    }

    if (score >= 10) {
        if (!enhancementX || !enhancementY) {
            changeEnhancementPosition();
        }
        htmlMarkup += `<div class="enhancement" style="grid-area: ${enhancementY} / ${enhancementX}"></div>`;
        handleEnhancement();
    }

    const intervalDuration = hasSpeedBoost ? 75 : 125;

    clearInterval(setIntervalId);
    setIntervalId = setInterval(initGame, intervalDuration);

    handleTeleportation();

    if (snakeX <= 0 || snakeX > 30 || snakeY <= 0 || snakeY > 30) {
        gameOver = true;
    }

    if (score >= 15) {
        if ((score - 15) % 2 === 0 && !wallAdded) {
            walls.push(changeWallPosition());
            wallAdded = true;
        } else if ((score - 15) % 2 !== 0) {
            wallAdded = false;
        }

        for (const wall of walls) {
            htmlMarkup += `<div class="wall" style="grid-area: ${wall.y} / ${wall.x}"></div>`;
        }

        checkWallCollision();
    }

    // Update snake body positions
    for (let i = snakeBody.length - 1; i > 0; i--) {
        snakeBody[i] = snakeBody[i - 1];
    }

    // Update snake head position
    snakeBody[0] = [snakeX, snakeY];

    // Move the snake head
    snakeX += velocityX;
    snakeY += velocityY;

    // Render the snake on the board
    for (let i = 0; i < snakeBody.length; i++) {
        htmlMarkup += `<div class="head" style="grid-area: ${snakeBody[i][1]} / ${snakeBody[i][0]}"></div>`;
        // Check for collision with its own body
        if (i !== 0 && snakeBody[0][1] === snakeBody[i][1] && snakeBody[0][0] === snakeBody[i][0]) {
            gameOver = true;
        }
    }
    playBoard.innerHTML = htmlMarkup;
};

changeTeleportPosition();

changeFoodPosition();

document.addEventListener("keydown", changeDirection);