<!DOCTYPE html>
<html lang="en">

<?php include "docHead.php" ?>

<body data-bs-spy="scroll" data-bs-offset="82" data-bs-target="#mainNav">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/logo-green.svg" alt="Thonic Logo" class="logo fixed" />
        <img src="/img/logo-black.svg" alt="Thonic Logo" class="logo black" />
        THONIC
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#platform">Platform</a></li>
          <li class="nav-item"><a class="nav-link" href="#token">Token</a></li>
          <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
          <li class="nav-item"><a class="nav-link" href="#signup">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="headline text-white">SECURE</div>
          <div class="headline text-cyan">TRANSPARENT</div>
          <div class="headline text-white">KNOWLEDGEABLE</div>
        </div>
      </div>
    </div>
  </header>

  <!-- About -->
  <section class="about bg-cyan text-navy section-band" id="about">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-10">
          <p class="lead">
            Thonic is the first ever cryptocurrency that helps you invest in the digital market. Buying cryptocurrency is challenging as it’s a convoluted process with many steps, and that’s without mentioning the risk factor. Determining which coin is a good investment and which will end in a rug pull is time consuming and requires in-depth research. That’s where Thonic comes in: it is a full-service financial platform that provides you with financial reporting on alt coins and helps you buy and sell digital currencies as well as manage your coin portfolio. Let our group of expert analysts put in the time and do the research so you don’t have to!
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-10 col-sm-8 col-lg-6 col-xl-4 d-grid">
          <a class="btn btn-xl btn-primary" href="#">READ THE WHITEPAPER</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform -->
  <section class="platform section-band" id="platform">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 col-xl-6">
          <div class="mb-4">
            <img src="https://via.placeholder.com/465x529" class="img-fluid mx-auto" alt="" />
          </div>
        </div>
        <div class="col-12 col-lg-7 col-xl-6">
          <h2>Platform</h2>
          <p class="subtitle mb-5">Thonic’s platform is a software as a service (SaaS) that offers financial tools to help people invest in the digital market. The platform will be released in multiple phases and feature a multi-package pricing model, with each tier offering more personalized financial tools.</p>
          <div class="row">
            <?php
            $platformFeatures = [
              [
                'iconClass' => 'far fa-hourglass',
                'heading' => 'Reporting Library',
                'text' => 'Gain access to standardized financial reporting on select cryptocurrencies. Our expert analysts research coins and assign investment ratings to help you decide which one to invest in'
              ],
              [
                'iconClass' => 'far fa-file-alt',
                'heading' => 'Portfolio Management',
                'text' => 'Access a financial performance dashboard that compares the performance of your holdings over time to that of the crypto industry'
              ],
              [
                'iconClass' => 'far fa-heart',
                'heading' => 'Brokerage Tools',
                'text' => 'Make buying and selling alt coins and cryptocurrency easier as they reduce the number of transactional steps'
              ],
              [
                'iconClass' => 'far fa-comment-dots',
                'heading' => 'Notifications and Alerts',
                'text' => 'Receive notifications when reporting is updated for cryptos on your watchlist'
              ]
            ];
            foreach ($platformFeatures as $platformFeature) {
            ?>
              <div class="col-12 col-sm-6 d-flex mb-3 mb-md-5">
                <div class="me-3 platform-info-icon text-cyan">
                  <i class="<?= $platformFeature['iconClass'] ?>"></i>
                </div>
                <div class="info">
                  <h6><?= $platformFeature['heading'] ?></h6>
                  <p><?= $platformFeature['text'] ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Token -->
  <section class="our-token bg-cyan-brighter section-band" id="token">
    <div class="container">
      <h2>Token</h2>
      <div class="row mb-4">
        <div class="col-12 col-md-8 mb-4">
          Thonic is a utility token that utilizes two key strategies to ensure holding the token is valuable. The first strategy is <em>BuyBack & Burn</em>, which encourages price stability and increases the value of the token by reducing the supply. All profits generated from the platform and sale of the token will go directly to BB&B until a threshold of 95% of the token supply is burned. The second strategy is earning passive income which redistributes 5% of each transaction to token holders in $BUSD.
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
          <a class="btn btn-xl btn-primary" href="#">GET THE WHITEPAPER</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h3>Features</h3>
        </div>
      </div>
      <div class="row pb-5 pt-3">
        <?php
        $features = [
          [
            'img' => '/img/busd.svg',
            'imgTitle' => '',
            'title' => 'BUSD Reflections',
            'body' => 'Earn automatic Binance pegged USD ($BUSD), rewards by holding your Thonic token, 5% of every buy, transfer and sell transaction is redistributed automatically to $THONIC eligible holders'
          ],
          [
            'img' => '/img/bunny.svg',
            'imgTitle' => '',
            'title' => 'Liquidity Pool',
            'body' => 'Our Smart contract deposits 2% from every buy/transfer/sell transaction is sent into a liquidity pool which has been locked and certified'
          ],
          [
            'img' => '/img/flame.svg',
            'imgTitle' => '',
            'title' => 'BuyBack & Burn',
            'body' => '100% of profits from our platform and utilities are used to buy and burn the Thonic token'
          ],
          [
            'img' => '/img/whale.svg',
            'imgTitle' => '',
            'title' => 'Anti-Whale',
            'body' => 'Our Anti-Whale Mechanism is a series of polcies during our luanch phases that prevent holders from purcahes large amounts of tokens at low prices'
          ]
        ];
        foreach ($features as $feature) {
        ?>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-borderless text-center">
              <img src="<?= $feature['img'] ?>" title="<?= $feature['imgTitle'] ?>" loading="lazy" class="mx-auto" style="max-height: 100px;" />
              <div class="card-body">
                <h4 class="card-title"><?= $feature['title'] ?></h4>
                <p><?= $feature['body'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <h3>Token Distribution</h3>
        </div>
      </div>

    </div>
  </section>


  <!-- Team -->
  <section id="team" class="section-band">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-8">
          <h2>Team</h2>
          <p class="subtitle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula
            malesuada placerat sit amet quis enim.</p>
        </div>
      </div>
      <div class="row">
        <?php
        $team = [
          [
            'photo' => 'https://via.placeholder.com/100x100',
            'name' => 'Antonella Buono',
            'title' => 'Content',
            'linkedin' => '#',
          ],
          [
            'photo' => 'https://via.placeholder.com/100x100',
            'name' => 'David Jenkins',
            'title' => 'Marketing',
            'linkedin' => '#',
          ],
          [
            'photo' => 'https://via.placeholder.com/100x100',
            'name' => 'Demetri Mihalakakos',
            'title' => 'Operations',
            'linkedin' => '',
          ],
          [
            'photo' => 'https://via.placeholder.com/100x100',
            'name' => 'Deyan Iolov',
            'title' => 'Technology',
            'linkedin' => '',
          ]
        ];

        foreach ($team as $member) {
        ?>
          <div class="col-md-6 col-lg-3 my-2">
            <div class="card card-borderless text-center">
              <img src="<?= $member['photo'] ?>" title="" alt="" loading="lazy" class="mx-auto profile-photo">
              <div class="card-body">
                <div class="h5 card-title"><?= $member['name'] ?></div>
                <p class="small"><?= $member['title'] ?></p>
                <div class="nav justify-content-center">
                  <a href="<?= $member['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Signup-->
  <section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
          <h2 class="text-white mb-5">Join the private sale</h2>
          <form class="form-signup" name="signup" method="POST" action="/success" data-netlify="true">
            <div class="row">
              <div class="col">
                <input class="form-control" type="email" name="email" placeholder="Enter email address..." aria-label="Enter email address..." />
              </div>
              <div class="col-auto">
                <button class="btn btn-xl btn-primary" type="submit">ADD ME</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Roadmap -->
  <section class="section-band" id="roadmap">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="sticky">
            <h2>Roadmap</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum.</p>
          </div>
        </div>
        <div class="col-md-7">
          <?php
          $roadmap = [
            [
              'name' => 'Phase 1',
              'milestones' => [
                [
                  'icon' => 'fa fa-file',
                  'title' => 'Whitepaper release',
                  'complete' => true
                ],
                [
                  'icon' => 'fa fa-file',
                  'title' => 'Website launch',
                  'complete' => true
                ],
                [
                  'icon' => 'fa fa-file',
                  'title' => 'Contract Deployment',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-briefcase',
                  'title' => 'KYC & Audit',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-briefcase',
                  'title' => 'Dox team',
                  'complete' => false
                ]
              ]
            ],
            [
              'name' => 'Phase 2',
              'milestones' => [
                [
                  'icon' => 'fa fa-university',
                  'title' => 'Raising capital',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-university',
                  'title' => 'Private Sale',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => 'Social Development',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => 'Marketing Development',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => '1000 telegram followers',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => '250 holders',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => 'Accepting requests for the whitelist presale',
                  'complete' => false
                ],
              ]
            ],
            [
              'name' => 'Phase 3',
              'milestones' => [
                [
                  'icon' => 'fa fa-university',
                  'title' => 'Presale',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-briefcase',
                  'title' => 'Coin market cap Application',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-briefcase',
                  'title' => 'Coin gecko Application',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => '2000 telegram followers',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => '500 holders',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => 'Add 2 ambassadors to team',
                  'complete' => false
                ],
              ]
            ]
          ];
          ?>
          <div class="accordion accordion-flush" id="accordionFlush">

            <?php foreach ($roadmap as $index => $phase) { ?>
              <div class="accordion-item">

                <h2 class="accordion-header" id="phase-heading-<?= $index ?>">
                  <button class="accordion-button <?= $index == $index ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#phase-collapse-<?= $index ?>" aria-expanded="<?= $index == $index ? 'true' : 'false' ?>" aria-controls="phase-collapse-<?= $index ?>">
                    <?= $phase['name'] ?>
                  </button>
                </h2>

                <div id="phase-collapse-<?= $index ?>" class="accordion-collapse collapse <?= $index == $index ? 'show' : '' ?>" aria-labelledby="phase-heading-<?= $index ?>">
                  <div class="accordion-body">
                    <?php foreach ($phase['milestones'] as $milestone) { ?>
                      <div class="row">
                        <div class="col-10 col-lg-8 d-flex">
                          <span class="milestone-icon"><i class="text-navy <?= $milestone['icon'] ?>"></i></span>
                          <div class="milestone-title">
                            <?= $milestone['title'] ?>
                          </div>
                        </div>
                        <div class="col-2 col-lg-4">
                          <span class="milestone-status">
                            <?php if ($milestone['complete']) { ?>
                              <i class="text-success far fa-check-circle"></i>
                            <?php } else { ?>
                              <i class="text-muted far fa-circle"></i>
                            <?php } ?>
                          </span>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-navy section-band" id="faq">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8">
          <h2 class="text-cyan">Frequently Asked Questions</h2>
          <div class="subtitle text-light">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu<br>fugiat nulla pariatur
            excepteur sint occaecat.
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="accordion accordion-flush" id="accordion-FAQ">
            <?php
            $faqs = [
              [
                'question' => 'Accordion Item #1',
                'answer' => 'Placeholder content for this accordion, which is intended to demonstrate the class. This is the first items accordion body.'
              ],
              [
                'question' => 'Accordion Item #2',
                'answer' => 'Placeholder content for this accordion, which is intended to demonstrate the class. This is the first items accordion body.'
              ],
              [
                'question' => 'Accordion Item #3',
                'answer' => 'Placeholder content for this accordion, which is intended to demonstrate the class. This is the first items accordion body.'
              ],
              [
                'question' => 'Accordion Item #4',
                'answer' => 'Placeholder content for this accordion, which is intended to demonstrate the class. This is the first items accordion body.'
              ],
              [
                'question' => 'Accordion Item #5',
                'answer' => 'Placeholder content for this accordion, which is intended to demonstrate the class. This is the first items accordion body.'
              ],
              [
                'question' => 'Accordion Item #6',
                'answer' => 'Placeholder content for this accordion, which is intended to demonstrate the class. This is the first items accordion body.'
              ]
            ];

            foreach ($faqs as $index => $faq) {
            ?>
              <div class="accordion-item mb-5">
                <a class="text-decoration-none text-cyan h4" href="#" data-bs-toggle="collapse" data-bs-target="#faq-collapse-<?= $index ?>" aria-expanded="<?= $index == 0 ? 'true' : 'false' ?>" aria-controls="faq-collapse-<?= $index ?>">
                  <?= $faq['question'] ?>
                </a>
                <div id="faq-collapse-<?= $index ?>" class="accordion-collapse collapse <?= $index == 0 ? 'show' : '' ?>" aria-labelledby="faq-heading-<?= $index ?>" data-bs-parent="#accordion-FAQ">
                  <div class="accordion-body"><?= $faq['answer'] ?></div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {

      var navbarCollapsible = document.body.querySelector('#mainNav');

      var navbarShrink = function() {
        if (!navbarCollapsible) {
          return;
        }
        if (window.scrollY === 0) {
          navbarCollapsible.classList.remove('navbar-white')
        } else {
          navbarCollapsible.classList.add('navbar-white')
        }
      };

      document.addEventListener('scroll', navbarShrink);
      navbarShrink();
    });
  </script>
</body>

</html>