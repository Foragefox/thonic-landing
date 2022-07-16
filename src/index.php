<!DOCTYPE html>
<html lang="en">

<?php include "docHead.php" ?>

<body data-bs-spy="scroll" data-bs-offset="82" data-bs-target="#mainNav">
  <?php if (!empty($_SERVER["GOOGLE_TAG_MANAGER"])) { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $_SERVER["GOOGLE_TAG_MANAGER"] ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php } ?>

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
          <li class="nav-item"><a class="nav-link" href="#presale">Presale</a></li>
          <li class="nav-item"><a class="nav-link" href="#roadmap">Roadmap</a></li>
          <li class="nav-item d-lg-none"><a class="nav-link" href="#faq">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead">
    <div class="headline-container">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <div class="headline text-white">Invest in alt coins with confidence.</div>
            <div class="headline text-white">And get paid.</div>

          </div>
        </div>
      </div>
    </div>
    <div class="pattern"></div>
  </header>

  <!-- Presale CTA -->
  <section class="callout-banner bg-green p-3 text-center">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-8 col-xl-6 col-xl-offset-1">
        <div class="h4">WHITELIST REGISTRATION FOR OUR PRESALE IS NOW OPEN</div>
      </div>
      <div class="col-12 col-md-4 col-xl-3 d-flex justify-content-center align-items-center">
        <button class="btn btn-lg btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#presale-popup">JOIN WHITELIST</button>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="about bg-cyan text-navy section-band" id="about">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-10">
          <p class="lead">
            Buying cryptocurrency is risky. Did you do enough research and catch the red flags? Or will you be on the wrong end of a rug pull?
          </p>
          <p class="lead">
            Let Thonic do for you what financial analysts do for investment firms: vet alt coins and help you make knowledgeable investment decisions.
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-10 col-sm-8 col-lg-6 col-xl-4 d-grid">
          <button class="btn btn-xl btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#read-white-paper">READ THE WHITEPAPER</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform -->
  <section class="platform section-band" id="platform">
    <div class="container">
      <h2>Platform.</h2>
      <div class="row">
        <div class="col-12 col-md-8">
          <p class="subtitle mb-5">
            Thonic's platform is a software as a service (SaaS) that offers financial tools to help people invest in the digital market. It will be released in multiple phases and feature a multi-package pricing model, with each tier offering more personalized financial tools.
          </p>
        </div>
        <div class="d-none d-md-block col-md-4">
          <div class="text-center mx-5">
            <img src="/img/platform-image.png" class="img-fluid mx-auto" alt="" />
          </div>
        </div>
      </div>

      <div class="row">
        <?php
        $platformFeatures = [
          [
            'iconClass' => 'far fa-hourglass',
            'heading' => 'Report Library',
            'text' => 'Access standardized financial reporting on select cryptocurrencies. Our expert analysts will research coins and assign investment ratings to help you decide which one to invest in'
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
          <div class="col-12 col-sm-6 mb-3 mb-md-5">
            <div class="platform-info-icon text-cyan">
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
  </section>

  <!-- Token -->
  <section class="our-token bg-cyan-brighter section-band" id="token">
    <div class="container">
      <h2>Token.</h2>
      <div class="row mb-4">
        <div class="col-12 col-md-8 mb-4">
          <p>
            Thonic is a utility token that employs two key strategies to ensure holding the token is profitable. The first strategy is BuyBack & Burn, which encourages price stability and increases the value of the token by reducing supply. The initial token supply of 200,000,000,000 coins will be reduced to a circulating supply of 100,000,000,000 after the initial burn. Following this, all profits generated from the platform and sale of the token will go directly to BB&B until a threshold of 95% of the token supply is burned.
          </p>
          <p>
            The second strategy is earning passive income as 5% of each transaction is redistributed to token holders in $BUSD. Built on the Binance Smart Chain for its faster block speeds and lower transaction costs, Thonic is designed to be held longer term to benefit from both passive income and capital appreciation.
          </p>
        </div>
        <div class="col-12 col-md-4 text-center">
          <button class="btn btn-xl btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#read-white-paper">GET THE WHITEPAPER</button>
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
            'body' => 'Earn automatic Binance Pegged USD ($BUSD) rewards by simply holding Thonic tokens: 5% of every buy, transfer and sell transaction is redistributed automatically to $THONIC eligible holders'
          ],
          [
            'img' => '/img/liquidity.svg',
            'imgTitle' => '',
            'title' => 'Liquidity Pool',
            'body' => 'Our Smart contract deposits 2% from every buy, transfer and sell transaction into a locked and certified liquidity pool'
          ],
          [
            'img' => '/img/flame.svg',
            'imgTitle' => '',
            'title' => 'BuyBack &amp; Burn',
            'body' => '100% of profits from our platform and utilities will be used to BuyBack & Burn the Thonic token until a threshold of 95% is reached'
          ],
          [
            'img' => '/img/whale.svg',
            'imgTitle' => '',
            'title' => 'Anti-Whale',
            'body' => 'Our Anti-Whale Mechanism is a series of policies that prevent holders from purchasing large amounts of tokens at low prices during our launch phase'
          ]
        ];
        foreach ($features as $feature) {
        ?>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card card-borderless text-center">
              <img src="<?= $feature['img'] ?>" title="<?= $feature['imgTitle'] ?>" loading="lazy" class="mx-auto" style="max-height: 60px;" />
              <div class="card-body">
                <h5 class="card-title"><?= $feature['title'] ?></h5>
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
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
        <img class="img-fluid" src="/img/distribution.svg" alt="Token distribution pie chart">
        <div>
          <div><span class="legend-bullet bg-black-brighter-20"></span> Burned</div>
          <div><span class="legend-bullet bg-cyan-darker"></span> Private &amp; Presale</div>
          <div><span class="legend-bullet bg-gray-darker"></span> Liquidity Pool</div>
          <div><span class="legend-bullet bg-green"></span> Team</div>
        </div>
      </div>
    </div>
  </section>


  <!-- Team -->
  <section id="team" class="section-band">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-8">
          <h2>Team.</h2>
          <p class="subtitle">
            The Thonic team is made up of a diverse group of qualified professionals and entrepreneurs who have extensive experience in computer science, securities investment, marketing and running successful businesses. Check them out below!
          </p>
        </div>
      </div>
      <?php
      $team = [
        [
          'photo' => '/img/antonella.jpeg',
          'name' => 'Antonella B',
          'title' => 'Content',
          'linkedin' => 'https://www.linkedin.com/in/antonella-b-0892318a/',
        ],
        [
          'photo' => '/img/david.jpeg',
          'name' => 'David J',
          'title' => 'Marketing',
          'linkedin' => 'https://www.linkedin.com/in/dnjenkins/',
        ],
        [
          'photo' => '/img/demetri.jpeg',
          'name' => 'Demetri M',
          'title' => 'Operations',
          'linkedin' => 'https://www.linkedin.com/in/demetri-mihalakakos-6b15a020/',
        ],
        [
          'photo' => '/img/deyan.jpeg',
          'name' => 'Deyan I',
          'title' => 'Technology',
          'linkedin' => 'https://www.linkedin.com/in/deyaniolov/',
        ],
        [
          'photo' => '/img/olaf.jpeg',
          'name' => 'Olaf K',
          'title' => 'Strategy',
          'linkedin' => 'https://www.linkedin.com/in/okreitz/',
        ]
      ];
      ?>
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="row justify-content-center">
            <?php foreach ($team as $member) { ?>
              <div class="col-sm-6 col-lg-4 my-2">
                <div class="card card-borderless text-center">
                  <img src="<?= $member['photo'] ?>" title="" alt="" loading="lazy" class="mx-auto profile-photo">
                  <div class="card-body">
                    <div class="h5 card-title"><?= $member['name'] ?></div>
                    <p class="small"><?= $member['title'] ?></p>
                    <div class="nav justify-content-center">
                      <a href="<?= $member['linkedin'] ?>" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Presale-->
  <section class="presale-section bg-gray" id="presale">
    <div class="container px-4 px-lg-5">
      <div class="row">
        <div class="col-md-11 col-lg-9 col-xl-8 mx-auto text-center">
          <h2 class="text-navy mb-5">Join the presale</h2>
          <form class="form-presale" name="presale" id="presale-form" method="POST" action="/api/presale">
            <div class="row">
              <div class="col-12 col-md pb-3 pb-md-0">
                <input class="form-control" type="text" name="email" placeholder="Enter email address..." aria-label="Enter email address..." />
              </div>
              <div class="col-12 col-md-auto">
                <button class="btn btn-xl btn-primary" type="submit">ADD ME!</button>
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
      </div>
    </div>
  </section>

  <!-- Roadmap -->
  <section class="section-band" id="roadmap">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="sticky">
            <h2>Roadmap.</h2>
            <p>
              Now that we have introduced the concept and team behind Thonic, let's talk timelines! Thonic's token and platform will be launched over six phases, with one phase being completed each Fiscal Quarter. If all the milestones in a phase are met before the end of the Quarter, however, we will immediately move on to the next phase so the platform can be beta launched by the end of 2022.
            </p>
            <p>
              Scroll through the Roadmap to see the task breakdowns by phase and our progress to date.
            </p>
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
                  'complete' => true
                ],
                [
                  'icon' => 'fa fa-briefcase',
                  'title' => '<a href="https://spywolf.network/#/token/0x0b91177B96bee81aa276bDbE68f4Dbdc7ee57D8f" target="_blank" rel="noopener">KYC, dox &amp; audit</a>',
                  'complete' => true
                ],
                [
                  'icon' => 'fa fa-university',
                  'title' => 'Raising capital',
                  'complete' => true
                ]
              ]
            ],
            [
              'name' => 'Phase 2',
              'milestones' => [

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
                  'title' => 'Coin market cap application',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-briefcase',
                  'title' => 'Coin gecko application',
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
            ],
            [
              'name' => 'Phase 4',
              'milestones' => [
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => 'Poocoin ads',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => 'Coin market cap ads',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => 'Marketing outreach',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-bullhorn',
                  'title' => 'How to buy videos',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => '2000 holders',
                  'complete' => false
                ],
              ]
            ],
            [
              'name' => 'Phase 5',
              'milestones' => [
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Alpha launch of platform',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Earnings calculator',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Direct token purchase',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Swap exchange',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => 'Add 5 analysts on the team',
                  'complete' => false
                ],
              ]
            ],
            [
              'name' => 'Phase 6',
              'milestones' => [
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Beta launch of platform',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Report notification and subscriptions',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-laptop-code',
                  'title' => 'Portfolio management',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => 'Add 10 analysts on the team',
                  'complete' => false
                ],
                [
                  'icon' => 'fa fa-chart-line',
                  'title' => '250 platform subscribers',
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
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="accordion accordion-flush" id="accordion-FAQ">
            <?php
            $faqs = [
              [
                'question' => 'Where can I register for the presale?',
                'answer' => 'You can find the whitelist registration form <a class="text-white" href="#presale">here</a>.'
              ],
              [
                'question' => 'What is slippage for?',
                'answer' => 'Slippage sets the tolerance for the maximum percentage of price movement you can live with. IT IS NOT A TAX.'
              ],
              [
                'question' => 'Why am I not receiving rewards?',
                'answer' => 'Rewards are directly related to Trading Volume and your bag size. Higher trading volume and bigger bags get higher and quicker rewards.'
              ],
              [
                'question' => 'How can I check the amount of coins burned?',
                'answer' => 'On BSC Scan, the first address is the BURN ADDRESS.'
              ],
              [
                'question' => 'Why 10% tax and when is it applied?',
                'answer' => 'It is applied to EVERY TRANSACTION, this includes: Buys, Sells and Transfers.
                <ul>
                <li>5% of every buy/transfer/sell is redistributed to all holders in $BUSD</li>
                <li>2% of every transaction is transferred into the Liquidity Pool on Pancakeswap to create a stable price floor</li>
                <li>3% of every transaction is sent to the marketing wallet to fund marketing, utility development and community management</li>
                </ul>
                '
              ],
              [
                'question' => 'What is AMA and when do they happen?',
                'answer' => 'Ask Me Anything, (AMA) is an open space where investors can talk to the team and ask questions. They will be held monthly starting after the presale.'
              ],
              [
                'question' => 'Where can I buy $THONIC?',
                'answer' => 'If you are new to cryptocurrency, we recommend you follow the "How to Buy" guides on our site. Please note, this section will be added shortly after the presale is complete.'
              ],
              [
                'question' => 'Where can I get additional help?',
                'answer' => 'Our Telegram community is also full of supportive and helpful members who can assist with any questions you may have. Join our Telegram chat here: <a class="text-white" href="https://t.me/+ojQiMqZaO_s5ZTM5" target="_blank" rel="noopener">https://t.me/+ojQiMqZaO_s5ZTM5</a>'
              ]
            ];

            foreach ($faqs as $index => $faq) {
            ?>
              <div class="accordion-item mb-4">
                <a class="text-decoration-none text-cyan h5 <?= $index == 0 ? '' : 'collapsed' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#faq-collapse-<?= $index ?>" aria-expanded="<?= $index == 0 ? 'true' : 'false' ?>" aria-controls="faq-collapse-<?= $index ?>">
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

  <?php include "popup.php" ?>

  <?php include "presale-popup.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="/js/scripts.js" type="text/javascript"></script>
  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {
      const presaleForm = document.getElementById("presale-form");
      presaleForm.onsubmit = async (event) => {
        submitEmailFormAjax(event, presaleForm)
      }

      const downloadForm = document.getElementById("download-form");
      downloadForm.onsubmit = async (event) => {
        const promise = submitEmailFormAjax(event, downloadForm);
        promise.finally(() => {
          document.getElementById("download-white-paper").click();
        });
      }

      const notifyForm = document.getElementById("notify-presale-form");
      notifyForm.onsubmit = async (event) => {
        submitEmailFormAjax(event, notifyForm)
      }

      const whitelistForm = document.getElementById("whitelist-form");
      whitelistForm.onsubmit = async (event) => {
        const submitButton = document.getElementById("submit-whitelist-form");
        submitButton.disabled = true;
        const promise = submitWhitelistFormAjax(event, whitelistForm);
        promise.finally(() => submitButton.disabled = false);
      }
    });
  </script>
</body>

</html>