const slideArea = document.querySelector('.slide-list');
const slideList = slideArea.querySelectorAll('.slide-cont');
const listLen = slideList.length;
const slideListWidth = 100 / (listLen + 2);
const slideBtn = document.querySelectorAll('.slide-btn');
let active = 0;
let slideCur = slideBtn[active];
slideCur.classList.add('active');

slideArea.style.width = `${100 * (listLen + 2)}%`;
slideList.forEach((element) => {
	element.style.width = `${slideListWidth}%`;
}); 

const slideListFirst = slideArea.firstElementChild.cloneNode(true);
const slideListLast = slideArea.lastElementChild.cloneNode(true);
slideArea.appendChild(slideListFirst);
slideArea.insertBefore(slideListLast, slideArea.firstElementChild);

let setting;

function replaying() {
	setting = setInterval(() => {
		for (let i = 0; i < listLen; i++) {
			slideBtn[i].classList.remove('active');
		}; 

		slideArea.style.transition = '.5s';
		slideArea.style.transform = `translateX(-${slideListWidth * (active + 2)}%`;
		
		slideCur.classList.remove('active');
		slideCur = slideBtn[++active];				

		if(active === listLen) {
			setTimeout(() => {
				slideArea.style.transition = '0s';
				slideArea.style.transform = `translateX(-${slideListWidth}%`;
			},500);
			active = 0;
			slideCur = slideBtn[0];
		};

		slideCur.classList.add('active');
	},5000);
};

document.addEventListener("DOMContentLoaded", () => {
	replaying();
});

// 버튼 클릭시 슬라이드 이동
for (let i = 0; i < listLen; i++) {
	slideBtn[i].onclick = () => {
		clearInterval(setting); 

		slideArea.style.transition = '.5s';
		slideArea.style.transform = `translateX(-${slideListWidth * (i + 1)}%`;

		for (let i = 0; i < listLen; i++) {
			slideBtn[i].classList.remove('active');
		};

		slideBtn[i].classList.add('active'); 

		active = i;
	}
}

// 다음버튼 클릭
const btnNext = document.querySelector('.next');

btnNext.addEventListener('click', () => {
	slideArea.style.transition = '.5s';
	slideArea.style.transform = `translateX(-${slideListWidth * (active + 2)}%`;

	slideCur.classList.remove('active');
	slideCur = slideBtn[++active];

	if(active === listLen) {
		setTimeout(() => {
			slideArea.style.transition = '0s';
			slideArea.style.transform = `translateX(-${slideListWidth}%`;
		},500);
		active = 0;
		slideCur = slideBtn[0];
	};

	slideCur.classList.add('active');
});

// 이전버튼 클릭
const btnPrev = document.querySelector('.prev');

btnPrev.addEventListener('click', () => {

	slideArea.style.transition = '.5s';
	slideArea.style.transform = `translateX(-${slideListWidth * active}%`;

	for (let i = 0; i < listLen; i++) {
		slideBtn[i].classList.remove('active');
	};

	slideCur = slideBtn[--active];

	if (active === -1) {
		setTimeout(() => {
			slideArea.style.transition = '0s';
			slideArea.style.transform = `translateX(-${slideListWidth * listLen}%`;
		},500);
		active = listLen - 1;
		slideCur = slideBtn[listLen - 1];
	};

	slideCur.classList.add('active');
});
