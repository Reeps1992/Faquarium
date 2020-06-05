'use strict';

function getRandomInteger(min, max)
{
    // return integer between min & max args
	return Math.floor(Math.random() * (max - min + 1)) + min;
};

function addBubbles()
{

	let bubbleTypes = 8;

// les bulles ne changent pas de position

	for (var i = 1; i <= bubbleTypes; i++) {
		let bubble = document.createElement('div');
		let type = getRandomInteger(1,8);
		bubble.classList.add('bubbles');
		bubble.classList.add('bubble-'+type);
		bubble.style.left = getRandomInteger(0, 100)+"%";
		document.body.appendChild(bubble);
	}
}

function addFish()
{

    let fishContainer;
    let realSize;
    let sizes = ['small', 'medium', 'large'];


    fishContainer = document.createElement('div');
		fishContainer.classList.add('fish');

    realSize = sizes[getRandomInteger(0, 2)];
    fishContainer.classList.add(realSize);

    fishContainer.style.top = getRandomInteger(0, 100)+"%";
    fishContainer.style.left = getRandomInteger(0, 100)+"%";

    document.body.appendChild(fishContainer);

};

for(let i = 0;i < 150; i++) {
	addFish();
};

addBubbles();
