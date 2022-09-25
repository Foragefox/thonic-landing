<div class="modal fade" tabindex="-1" id="read-white-paper">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-evenly text-center rule-end">
              <h5 class="pb-4 pt-4">
                Download whitepaper<br>
                &amp;<br>
                Let me know when the presale launches
              </h5>

              <form class="form-download" name="download" id="download-form" method="POST" action="/api/presale">
                <div class="row">
                  <div class="col-12 pb-3">
                    <input class="form-control text-center" type="text" name="email" placeholder="Enter email address..." aria-label="Enter email address..." />
                  </div>
                  <div class="col-12 d-grid gap-2">
                    <button class="btn btn-primary" type="submit">DOWNLOAD</button>
                  </div>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="hidden" name="source" tabindex="-1" value="">
                  <input type="text" name="confirm" tabindex="-1" value="">
                </div>
                <div class="form-error bg-danger text-white mt-2 py-2 px-2 hide"></div>
                <div class="form-success bg-green mt-2 py-2 px-2 hide"></div>
              </form>

            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-evenly pb-4">
              <div class="text-center pb-3 pt-5">
                <h5>Download whitepaper</h5>
                <p class="lead">(No Email required)</p>
              </div>
              <a class="btn btn-outline-primary" id="download-white-paper" target="_blank" href="https://github.com/thonic-finance/whitepaper/raw/master/thonic_whitepaper_v2.pdf" rel="noopener">DOWNLOAD</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>