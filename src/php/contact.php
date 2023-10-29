<?php include 'config.php' ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Contact | Thonic</title>
        <?php include 'parts/doc-header.php' ?>
    </head>
    <body>

        <?php include 'parts/header.php' ?>

        <main>
            <section class="hero">
                <div class="hero-body">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-lg-6">
                                <h1 class="display-4">Contact</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <form class="row g-2" id="contact-form" method="POST" action="/api/contact">
                                <div class="col-md-12">
                                    <label for="subject" class="form-label" >Subject</label>
                                    <select class="form-select" id="subject" name="subject" aria-label="Subject">
                                        <option selected value="general-inquiry">General Inquiry</option>
                                        <option value="proposal">Proposal</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="first-name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first-name"  name="firstName">
                                </div>
                                <div class="col-md-6">
                                    <label for="last-name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" name="lastName">
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="hidden" name="source" tabindex="-1" value="">
                                        <input type="text" name="confirm" tabindex="-1" value="">
                                    </div>
                                    <button type="submit" class="btn btn-green" id="submit-form">Submit</button>
                                </div>
                                <div class="form-error text-bg-danger text-white py-2 px-2 hide"></div>
                                <div class="form-success text-bg-green py-2 px-2 hide"></div>
                            </form>
                        </div>
                        <div class="col-lg-2">
                            
                        </div>
                        <div class="col-lg-3">
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include 'parts/footer.php' ?>

        <?php include 'parts/doc-footer.php' ?>

        <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', event => {
                const proposalForm = document.getElementById('contact-form');
                proposalForm.onsubmit = async (event) => {
                    const submitButton = document.getElementById('submit-form');
                    submitButton.disabled = true;

                    submitContactFormAjax(event, proposalForm)
                        .catch(error => console.log(error))
                        .finally(() => submitButton.disabled = false);
                }
            });
        </script>
    </body>
</html>