document.addEventListener('DOMContentLoaded', function () {
    function updateStarRating() {
        const ratingCards = document.querySelectorAll('.reviews__rating-card');

        ratingCards.forEach((card, index) => {
            const scoreElement = card.querySelector('.reviews__rating-score');
            const starsContainer = card.querySelector('.reviews__rating-stars');

            if (scoreElement && starsContainer) {
                const rating = parseFloat(scoreElement.textContent.trim().replace(',', '.'));

                if (!isNaN(rating) && rating >= 0 && rating <= 5) {
                    const widthPercent = Math.round((rating / 5) * 100);

                    starsContainer.innerHTML = `
                        <div class="stars">
                            <span></span>
                            <div class="inner" style="width: ${widthPercent}%"></div>
                        </div>
                    `;
                }
            }
        });
    }

    updateStarRating();
});
