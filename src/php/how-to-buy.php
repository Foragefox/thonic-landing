<?php include 'config.php' ?>

<!doctype html>
<html lang="en">

<head>
    <title>How to buy | Thonic</title>
    <?php include 'parts/doc-header.php' ?>
</head>

<body class="bg-primary">
    <main>
        <section class="hero-how-to-buy">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-8 offset-lg-1">
                        <h1 class="display-4">Learn how to buy Thonic</h1>
                        <img src="/img/twisty-arrow.png" class="twisty-arrow mx-auto d-block d-lg-none" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="card bg-cyan text-white mx-auto" style="max-width: 450px;">
                            <div class="card-body">

                                <form method="POST" action="/api/list" id="cta-how-to-buy">
                                    <h4 class="text-center">Kick-start your crypto journey today</h4>

                                    <p class="text-center">Discover how to safely purchase altcoins like Thonic with our step-by-step guide:</p>

                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email">
                                    </div>

                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="hidden" name="source" tabindex="-1" value="">
                                        <input type="hidden" name="tag" tabindex="-1" value="How to buy">
                                        <input type="text" name="confirm" tabindex="-1" value="">
                                    </div>
                                    <button type="submit" class="btn btn-lg w-100 btn-green" id="submit-form">Get instructions</button>

                                    <div class="form-error text-bg-danger text-white py-2 px-2 hide"></div>
                                    <div class="form-success text-bg-green py-2 px-2 hide"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1 order-lg-first text-white">
                        <div class="h3 mb-4">
                            Crypto can be complicated - but <strong class="text-green">it doesn't have to be!</strong>
                        </div>
                        <p>You can start your altcoin investment journey in <strong>3 easy steps:</strong>
                        <p><strong class="text-green">STEP 1:</strong> Setup a virtual wallet</p>
                        <p><strong class="text-green">STEP 2:</strong> Fund it with the required token</p>
                        <p class="mb-4"><strong class="text-green">STEP 3:</strong> Buy Thonic on an altcoin marketplace - Pancackeswap</p>

                        <p class="mb-4">Want step-by-step instrcution on how to safely buy Thonic and other altcoins? Enter your email addres for PDF and video guides.</p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include 'parts/footer.php' ?>

    <?php include 'parts/doc-footer.php' ?>

    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', event => {
            const howToBuyForm = document.getElementById('cta-how-to-buy');
            howToBuyForm.onsubmit = async (event) => submitEmailFormAjax(event, howToBuyForm);
        });
    </script>
</body>

</html>