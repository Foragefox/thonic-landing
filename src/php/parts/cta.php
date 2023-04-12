<section class="section-sm cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-8 align-self-center">
                <h2 class="mb-md-0">Join our newsletter</h2>
            </div>
            <div class="col-md-6 col-xl-4 align-self-center">
                <form class="row g-2" method="POST" action="/api/list" id="cta-form">
                    <div class="col-8 col-lg-8 col-xl-9">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Email</label>
                        <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="EMAIL">
                    </div>

                    <div class="col-4 col-lg-4 col-xl-3">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-green">Submit</button>
                        </div>
                    </div>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="hidden" name="source" tabindex="-1" value="">
                        <input type="text" name="confirm" tabindex="-1" value="">
                    </div>
                    <div class="form-error text-bg-danger text-white py-2 px-2 hide"></div>
                    <div class="form-success text-bg-green py-2 px-2 hide"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {
        const listForm = document.getElementById('cta-form');
        listForm.onsubmit = async (event) => submitEmailFormAjax(event, listForm);
    });
</script>