<?php include 'config.php' ?>

<!doctype html>
<html lang="en">

<head>
    <title>Latest activity | Thonic</title>
    <?php include 'parts/doc-header.php' ?>
</head>

<body class="">
    <?php include 'parts/header.php' ?>

    <main>
        <section class="hero hero-blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="text-center">
                            <h1 class="display-3 mb-4">The latest Thonic activity</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-sm">
            <div class="container">
                <div class="row mb-5" id="highlight-container">
                    <div class="d-flex p-5">
                        <div class="loader-triangle-9">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="row" id="card-container"></div>
                <div class="p-3 text-center">
                    <button type="button" class="btn btn-primary d-none" id="see-older-posts">See older</button>
                </div>
            </div>
        </section>

    </main>

    <?php include 'parts/footer.php' ?>

    <?php include 'parts/doc-footer.php' ?>

    <script id="blog-highlight" type="text/html">
        <div class="col-md-6 col-xxl-4 offset-xxl-2">
            <img class="img-fluid mb-3" src="{image}" />
        </div>
        <div class="col-md-6 col-xxl-4">
            <h2>{title}</h2>
            <p style="white-space: pre-line">{description}</p>
            <div class="d-flex justify-content-between">
                <span class="text-secondary">{date}</span>
                <a href="{link}" target="_blank" rel="noopener noreferrer nofollow">See post</a>
            </div>
        </div>
    </script>

    <script id="blog-card" type="text/html">
        <div class="col-md-6 col-xl-4 mb-5">
            <img class="img-fluid mb-3" src="{image}" />
            <h3>{title}</h3>
            <p style="white-space: pre-line">{description}</p>
            <div class="d-flex justify-content-between">
                <span class="text-secondary">{date}</span>
                <a href="{link}" target="_blank" rel="noopener noreferrer nofollow">See post</a>
            </div>
        </div>
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const highlightContainer = document.getElementById('highlight-container');
            const cardContainer = document.getElementById('card-container');
            const templateBlogHighlight = document.getElementById('blog-highlight').innerHTML;
            const templateBlogCard = document.getElementById('blog-card').innerHTML;
            const seeOlderButton = document.getElementById('see-older-posts');

            const PAGE_SIZE = 6;
            let blogPosts;
            let nextPage = 0;

            const populateBlogTemplate = (template, blogPost) => {
                for (const [key, value] of Object.entries(blogPost)) {
                    template = template.split(`{${key}}`).join(value);
                }
                return template;
            }

            const loadPageOfPosts = (posts, page) => {
                const thisPagePosts = posts.slice(page * PAGE_SIZE, (page + 1) * PAGE_SIZE);
                const postMarkup = thisPagePosts.map((post) => populateBlogTemplate(templateBlogCard, post));
                cardContainer.insertAdjacentHTML('beforeend', postMarkup.join(''));
            }

            const loadNextPage = () => {
                loadPageOfPosts(blogPosts, nextPage);
                nextPage++;

                if (blogPosts[(nextPage * PAGE_SIZE) + 1] === undefined) {
                    seeOlderButton.classList.add('d-none');
                } else {
                    seeOlderButton.classList.remove('d-none');
                }
            }

            seeOlderButton.onclick = () => loadNextPage();

            fetch(`/api/blog`, {
                    method: 'GET'
                })
                .then(response => response.json())
                .then(response => {
                    blogPosts = response;
                    const blogHighlight = blogPosts.shift();
                    highlightContainer.innerHTML = populateBlogTemplate(templateBlogHighlight, blogHighlight);
                    loadNextPage();
                })
        });
    </script>
</body>

</html>