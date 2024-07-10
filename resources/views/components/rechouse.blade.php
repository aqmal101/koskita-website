<div class="grid grid-cols-4 gap-4 px-20 py-12" id="card-container">
    <!-- Cards will be inserted here by JavaScript -->
</div>

<script>
    const cardContainer = document.getElementById('card-container');

    const createCardTemplate = (id) => `
    <div class="card bg-base-100 w-full shadow-xl">
        <a href="detail.html?id=${id}">
            <figure class="card-figure">
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">
                    Shoes!
                    <div class="badge badge-secondary">NEW</div>
                </h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <div class="badge badge-outline">Fashion</div>
                    <div class="badge badge-outline">Products</div>
                </div>
            </div>
        </a>
    </div>
`;

    for (let i = 0; i < 8; i++) {
        const cardWrapper = document.createElement('div');
        cardWrapper.innerHTML = createCardTemplate(i + 1); // Assuming id starts from 1
        cardContainer.appendChild(cardWrapper);
    }
</script>

<style>
    .card figure {
        height: 70%;
        border: 10px solid #fff;
        border-bottom: none;
        /* Adjust the border color and width as needed */
        overflow: hidden;
        /* Ensure the image doesn't overflow */
    }

    .card figure img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        /* Ensures the image covers the container while maintaining aspect ratio */
    }
</style>