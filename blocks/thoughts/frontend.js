const initThoughtsBlock = (block) => {
	const cards = Array.from(block.querySelectorAll('.enigma-thoughts__card'));

	if (cards.length <= 1 || block.dataset.thoughtsReady === 'true') {
		return;
	}

	block.dataset.thoughtsReady = 'true';

	const interval = Math.max(2000, parseInt(block.dataset.interval || '4500', 10));
	const animation = block.dataset.animation === 'fall' ? 'fall' : 'fade';
	const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	let activeIndex = 0;

	const updateCards = () => {
		cards.forEach((card, index) => {
			const offset = (index - activeIndex + cards.length) % cards.length;

			card.classList.toggle('is-active', offset === 0);
			card.classList.toggle('is-next', offset === 1);
			card.classList.toggle('is-after-next', offset === 2);
			card.setAttribute('aria-hidden', offset === 0 ? 'false' : 'true');
		});
	};

	const rotate = () => {
		const currentCard = cards[activeIndex];
		const nextIndex = (activeIndex + 1) % cards.length;

		if (!prefersReducedMotion && animation === 'fall') {
			currentCard.classList.add('is-leaving');
			window.setTimeout(() => {
				currentCard.classList.remove('is-leaving');
				activeIndex = nextIndex;
				updateCards();
			}, 520);
			return;
		}

		activeIndex = nextIndex;
		updateCards();
	};

	updateCards();
	window.setInterval(rotate, interval);
};

document.addEventListener('DOMContentLoaded', () => {
	document.querySelectorAll('.enigma-thoughts').forEach(initThoughtsBlock);
});
