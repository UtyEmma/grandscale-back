@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

<div class="rui-page content-wrap">
    <div class="rui-page-title">
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          </ol>
        </nav>
        <h1>Dashboard</h1>
      </div>
    </div>
    <div class="rui-page-content">
      <div class="container-fluid">
        <div
          class="rui-swiper"
          data-swiper-initialslide="2"
          data-swiper-loop="false"
          data-swiper-grabcursor="true"
          data-swiper-center="true"
          data-swiper-slides="auto"
          data-swiper-gap="30"
          data-swiper-speed="400"
        >
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="rui-widget rui-widget-chart">
                  <div class="rui-widget-chart-info">
                    <div class="rui-widget-title h2">25%</div>
                    <small class="rui-widget-subtitle">Bounce Rate</small>
                  </div>
                  <div class="rui-chartjs-container">
                    <div
                      class="rui-chartist rui-chartist-donut"
                      data-width="150"
                      data-height="150"
                      data-chartist-series="5,2"
                      data-chartist-width="4"
                      data-chartist-gradient="#8e9fff;#2bb7ef"
                    ></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="rui-widget rui-widget-chart">
                  <div class="rui-widget-chart-info">
                    <div class="rui-widget-title h2">-12%</div>
                    <small class="rui-widget-subtitle">Sales Today</small>
                  </div>
                  <div class="rui-chartjs-container">
                    <div
                      class="rui-chartist rui-chartist-donut"
                      data-width="150"
                      data-height="150"
                      data-chartist-series="2,8"
                      data-chartist-width="4"
                      data-chartist-gradient="#8e9fff;#2bb7ef"
                    ></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide rui-swiper-slide-total">
                <div class="rui-widget rui-widget-chart rui-widget-total">
                  <div class="rui-widget-chart-info">
                    <div class="rui-widget-title h1">$1371.24</div>
                    <small class="rui-widget-subtitle">Total Income</small>
                  </div>
                  <div class="rui-widget-total-chart">
                    <canvas
                      class="rui-chartjs rui-chartjs-line rui-chartjs-total"
                      data-height="50"
                      data-chartjs-interval="3000"
                      data-chartjs-line-color="#8e9fff"
                    ></canvas>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="rui-widget rui-widget-chart">
                  <div class="rui-widget-chart-info">
                    <div class="rui-widget-title h2">+14%</div>
                    <small class="rui-widget-subtitle">Users Today</small>
                  </div>
                  <div class="rui-chartjs-container">
                    <div
                      class="rui-chartist rui-chartist-donut"
                      data-width="150"
                      data-height="150"
                      data-chartist-series="8,1"
                      data-chartist-width="4"
                      data-chartist-gradient="#8e9fff;#2bb7ef"
                    ></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="rui-widget rui-widget-chart">
                  <div class="rui-widget-chart-info">
                    <div class="rui-widget-title h2">+10%</div>
                    <small class="rui-widget-subtitle">Session</small>
                  </div>
                  <div class="rui-chartjs-container">
                    <div
                      class="rui-chartist rui-chartist-donut"
                      data-width="150"
                      data-height="150"
                      data-chartist-series="5,5"
                      data-chartist-width="4"
                      data-chartist-gradient="#8e9fff;#2bb7ef"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next">
            <span
              data-feather="chevron-right"
              class="rui-icon rui-icon-stroke-1_5"
            ></span>
          </div>
          <div class="swiper-button-prev">
            <span
              data-feather="chevron-left"
              class="rui-icon rui-icon-stroke-1_5"
            ></span>
          </div>
        </div>
        <div class="rui-gap-2"></div>
        <div class="row vertical-gap">
          <div class="col-lg-4">
            <div class="rui-widget rui-widget-actions">
              <div class="rui-widget-head">
                <h4 class="rui-widget-title">Latest Tasks</h4>
                <div
                  class="
                    dropdown
                    dropdown-hover
                    dropdown-triangle
                    dropdown-keep-open
                    ml-auto
                  "
                >
                  <a
                    class="dropdown-item mnr-8"
                    href="#"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-offset="10,12"
                    ><span class="btn btn-custom-round"
                      ><span
                        data-feather="more-vertical"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span></span
                  ></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a class="dropdown-item" href="#">Export to XLS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to XML</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rui-widget-content">
                <ul
                  class="
                    list-group list-group-flush
                    rui-widget-list rui-widget-task-list
                  "
                >
                  <li class="list-group-item">
                    <div class="rui-task rui-task-success">
                      <div class="rui-task-icon">
                        <span
                          data-feather="alert-circle"
                          class="rui-icon rui-icon-stroke-1_5"
                        ></span>
                      </div>
                      <div class="rui-task-content">
                        <a class="rui-task-title" href="task.html"
                          >Cattle whose. There isn&#39;t cattle rule said</a
                        >
                        <small class="rui-task-subtitle"
                          >#12 opened 4 days ago by
                          <a href="#">Henry</a></small
                        >
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="rui-task rui-task-success">
                      <div class="rui-task-icon">
                        <span
                          data-feather="alert-circle"
                          class="rui-icon rui-icon-stroke-1_5"
                        ></span>
                      </div>
                      <div class="rui-task-content">
                        <a class="rui-task-title" href="task.html"
                          >Was living rule Him created a to. Light of
                          itself</a
                        >
                        <small class="rui-task-subtitle"
                          >#11 opened 21 days ago by
                          <a href="#">Neil</a></small
                        >
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rui-widget rui-widget-actions">
              <div class="rui-widget-head">
                <h4 class="rui-widget-title">Latest Uploads</h4>
                <div
                  class="
                    dropdown
                    dropdown-hover
                    dropdown-triangle
                    dropdown-keep-open
                    ml-auto
                  "
                >
                  <a
                    class="dropdown-item mnr-8"
                    href="#"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-offset="10,12"
                    ><span class="btn btn-custom-round"
                      ><span
                        data-feather="more-vertical"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span></span
                  ></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a class="dropdown-item" href="#">Export to XLS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to XML</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rui-widget-content">
                <ul class="list-group list-group-flush rui-widget-list">
                  <li class="list-group-item">
                    <div class="media media-filled">
                      <a href="#" class="media-link"
                        ><span class="media-img bg-transparent"
                          ><img
                            src="./assets/images/icon-zip.svg"
                            class="icon-file"
                            alt="" /></span
                        ><span class="media-body"
                          ><span class="media-title"
                            >Added banner archive<span class="media-time"
                              >08:31</span
                            ></span
                          >
                          <small class="media-subtitle">Commerce</small></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled">
                      <a href="#" class="media-link"
                        ><span class="media-img bg-transparent"
                          ><img
                            src="./assets/images/icon-zip.svg"
                            class="icon-file"
                            alt="" /></span
                        ><span class="media-body"
                          ><span class="media-title"
                            >Sensific-1.2.0.zip<span class="media-time"
                              >10:24</span
                            ></span
                          >
                          <small class="media-subtitle">Template</small></span
                        ></a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rui-widget rui-widget-actions">
              <div class="rui-widget-head">
                <h4 class="rui-widget-title">Activity</h4>
                <div
                  class="
                    dropdown
                    dropdown-hover
                    dropdown-triangle
                    dropdown-keep-open
                    ml-auto
                  "
                >
                  <a
                    class="dropdown-item mnr-8"
                    href="#"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-offset="10,12"
                    ><span class="btn btn-custom-round"
                      ><span
                        data-feather="more-vertical"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span></span
                  ></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a class="dropdown-item" href="#">Export to XLS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to XML</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rui-widget-content">
                <ul class="list-group list-group-flush rui-widget-list">
                  <li class="list-group-item">
                    <div class="media media-filled">
                      <a href="#" class="media-link active"
                        ><span class="media-img">P</span>
                        <span class="media-body"
                          ><span class="media-title"
                            >[Project] Release Version 1.2.0</span
                          >
                          <small class="media-subtitle"
                            >Jul 05, 2020 10:22 — created</small
                          ></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled">
                      <a href="#" class="media-link active"
                        ><span class="media-img">H</span>
                        <span class="media-body"
                          ><span class="media-title"
                            >[Hotfix] Error login page</span
                          >
                          <small class="media-subtitle"
                            >Jul 04, 2020 10:38 — created</small
                          ></span
                        ></a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="rui-gap-2"></div>
        <div class="row vertical-gap">
          <div class="col-lg-4">
            <div class="rui-widget rui-widget-server">
              <div class="rui-widget-head">
                <h4 class="rui-widget-title">Memory Usage</h4>
                <div
                  class="
                    dropdown
                    dropdown-hover
                    dropdown-triangle
                    dropdown-keep-open
                    ml-auto
                  "
                >
                  <a
                    class="dropdown-item mnr-8"
                    href="#"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-offset="10,12"
                    ><span class="btn btn-custom-round"
                      ><span
                        data-feather="more-vertical"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span></span
                  ></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a class="dropdown-item" href="#">Export to XLS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to XML</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rui-widget-content mnt-5">
                <span
                  data-feather="server"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
                >16385 MB
              </div>
              <div class="rui-widget-server-chart">
                <canvas
                  class="rui-chartjs rui-chartjs-line rui-chartjs-memory"
                  data-height="80"
                  data-chartjs-interval="3000"
                  data-chartjs-line-color="#8e9fff"
                ></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rui-widget rui-widget-server">
              <div class="rui-widget-head">
                <h4 class="rui-widget-title">Disc Usage</h4>
                <div
                  class="
                    dropdown
                    dropdown-hover
                    dropdown-triangle
                    dropdown-keep-open
                    ml-auto
                  "
                >
                  <a
                    class="dropdown-item mnr-8"
                    href="#"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-offset="10,12"
                    ><span class="btn btn-custom-round"
                      ><span
                        data-feather="more-vertical"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span></span
                  ></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a class="dropdown-item" href="#">Export to XLS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to XML</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rui-widget-content mnt-5">
                <span
                  data-feather="disc"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span>
                200 GB
              </div>
              <div class="rui-widget-server-chart">
                <canvas
                  class="rui-chartjs rui-chartjs-line rui-chartjs-disc"
                  data-height="80"
                  data-chartjs-interval="3000"
                  data-chartjs-line-color="#2bb7ef"
                ></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rui-widget rui-widget-server">
              <div class="rui-widget-head">
                <h4 class="rui-widget-title">CPU Usage</h4>
                <div
                  class="
                    dropdown
                    dropdown-hover
                    dropdown-triangle
                    dropdown-keep-open
                    ml-auto
                  "
                >
                  <a
                    class="dropdown-item mnr-8"
                    href="#"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-offset="10,12"
                    ><span class="btn btn-custom-round"
                      ><span
                        data-feather="more-vertical"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span></span
                  ></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a class="dropdown-item" href="#">Export to XLS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Export to XML</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="rui-widget-content mnt-5">
                <span
                  data-feather="cpu"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span>
                2x 3.60 MHz
              </div>
              <div class="rui-widget-server-chart">
                <canvas
                  class="rui-chartjs rui-chartjs-line rui-chartjs-cpu"
                  data-height="80"
                  data-chartjs-interval="3000"
                  data-chartjs-line-color="#6bdea7"
                ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="rui-gap-3"></div>
        <h2>Earnings by Countries</h2>
        <div class="row vertical-gap">
          <div class="col-lg-8">
            <div class="rui-widget p-0"><div class="rui-jqvmap"></div></div>
          </div>
          <div class="col-lg-4">
            <div class="rui-widget">
              <div class="rui-widget-content">
                <ul
                  class="
                    list-group list-group-flush
                    rui-widget-list rui-widget-country-list rui-scrollbar
                  "
                >
                  <li class="list-group-item">
                    <div class="media media-filled media-country active">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/united-states-of-america.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">United States</div>
                          <div class="media-country-price">$795.43</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/germany.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">Germany</div>
                          <div class="media-country-price">$382.57</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/france.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">France</div>
                          <div class="media-country-price">$181.58</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/canada.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">Canada</div>
                          <div class="media-country-price">$126.98</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/netherlands.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">Netherlands</div>
                          <div class="media-country-price">$83.02</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/italy.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">Italy</div>
                          <div class="media-country-price">$79.63</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/russia.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">Russia</div>
                          <div class="media-country-price">$74.39</div></span
                        ></a
                      >
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media media-filled media-country">
                      <a href="#" class="media-link"
                        ><span class="media-img"
                          ><img
                            src="./assets/images/czech-republic.svg"
                            alt=""
                          /> </span
                        ><span class="media-body"
                          ><div class="media-title">Czech Republic</div>
                          <div class="media-country-price">$74.29</div></span
                        ></a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="rui-footer">
      <div class="container-fluid">
        <p class="mb-0">2020 &copy; Design by Dexad and nK.</p>
      </div>
    </footer>
  </div>
  <div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h2" id="exampleModalPopupLabel">
            Modal title
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span
              data-feather="x"
              class="rui-icon rui-icon-stroke-1_5"
            ></span>
          </button>
        </div>
        <div class="modal-body">
          <p class="mnb-2">
            I likeness fly one she'd won't winged Midst divide. Their second
            stars, be their. Make moving. Great saying fowl, heaven greater
            moving tree Multiply midst blessed was there, days days they're a
            tree dry let which they're.
          </p>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-dismiss="modal"
          >
            Close
          </button>
          <button type="button" class="btn btn-brand">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="rui-popup rui-popup-search container" id="search">
    <div class="rui-search">
      <div class="rui-search-head">
        <form action="#">
          <div class="input-group">
            <input
              type="search"
              class="form-control form-control-clean order-12"
              placeholder="Type to search..."
            />
            <div class="input-group-prepend mnl-3 order-1">
              <button
                type="button"
                class="btn btn-clean btn-uniform btn-grey-5 mb-0 mnl-10"
              >
                <span
                  data-feather="search"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="rui-search-body">
        <div class="row vertical-gap">
          <div class="col-12 col-md-6 col-lg-4">
            <h4>Members</h4>
            <a href="#" class="media media-success"
              ><span class="media-img"
                ><img src="./assets/images/avatar-2.png" alt="" /></span
              ><span class="media-body"
                ><span class="media-title">Helen Holt</span>
                <small class="media-subtitle">Content Manager</small>
              </span></a
            ><a href="#" class="media media-warning"
              ><span class="media-img"
                ><img src="./assets/images/avatar-3.png" alt="" /></span
              ><span class="media-body"
                ><span class="media-title">Avice Harris</span>
                <small class="media-subtitle">Support</small>
              </span></a
            ><a href="#" class="media media-success"
              ><span class="media-img"
                ><img src="./assets/images/avatar-4.png" alt="" /></span
              ><span class="media-body"
                ><span class="media-title">Anna Rice</span>
                <small class="media-subtitle">Programmer</small></span
              ></a
            >
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <h4>Articles</h4>
            <a href="#" class="media"
              ><span class="media-img">M</span>
              <span class="media-body"
                ><span class="media-title">Minimal Design</span>
                <small class="media-subtitle"
                  >Be life tree every behold fish</small
                >
              </span></a
            ><a href="#" class="media"
              ><span class="media-img"
                ><span
                  data-feather="heart"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></span>
              <span class="media-body"
                ><span class="media-title">Admin Dashboard</span>
                <small class="media-subtitle"
                  >Fruit their us also rule one multiply</small
                >
              </span></a
            ><a href="#" class="media"
              ><span class="media-img">R</span>
              <span class="media-body"
                ><span class="media-title">Responsive Design</span>
                <small class="media-subtitle"
                  >Behold, to all own, one all fruitful let</small
                ></span
              ></a
            >
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <h4>Files</h4>
            <a href="#" class="media"
              ><span class="media-img bg-transparent"
                ><img
                  src="./assets/images/icon-zip.svg"
                  class="icon-file"
                  alt="" /></span
              ><span class="media-body"
                ><span class="media-title">Dashboard</span>
                <small class="media-subtitle">Admin &amp; Dashboard</small>
              </span></a
            ><a href="#" class="media"
              ><span class="media-img bg-transparent"
                ><img
                  src="./assets/images/icon-jpg.svg"
                  class="icon-file"
                  alt="" /></span
              ><span class="media-body"
                ><span class="media-title">Application</span>
                <small class="media-subtitle">Application</small>
              </span></a
            ><a href="#" class="media"
              ><span class="media-img bg-transparent"
                ><img
                  src="./assets/images/icon-png.svg"
                  class="icon-file"
                  alt="" /></span
              ><span class="media-body"
                ><span class="media-title">Marketing</span>
                <small class="media-subtitle"
                  >Landing &amp; Corporate</small
                ></span
              ></a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rui-popup rui-popup-messenger" id="messenger">
    <form class="rui-messenger rui-messenger-mini">
      <div class="rui-messenger-head">
        <div class="input-group rui-messenger-search">
          <button
            type="button"
            class="btn btn-clean btn-uniform btn-grey-5"
            data-toggle="button"
            aria-pressed="false"
          >
            <span
              data-feather="search"
              class="rui-icon rui-icon-stroke-1_5"
            ></span>
          </button>
          <input
            type="search"
            class="form-control form-control-clean"
            placeholder="Type to search..."
            data-toggle="input"
            autocomplete="off"
          />
        </div>
        <h4 class="mnb-2">Messenger</h4>
      </div>
      <div class="rui-messenger-list rui-scrollbar">
        <a
          class="btn rui-messenger-collapse-btn"
          data-toggle="collapse"
          href="#collapseOnline"
          role="button"
          aria-expanded="false"
          aria-controls="collapseOnline"
          >Online
          <span
            data-feather="chevron-right"
            class="rui-icon rui-icon-stroke-1_5"
          ></span
        ></a>
        <div class="collapse show" id="collapseOnline">
          <div class="rui-messenger-collapse">
            <div class="media media-success media-filled">
              <a href="#" class="media-link rui-messenger-item"
                ><span class="media-img"
                  ><img src="./assets/images/avatar-5.png" alt="" /></span
                ><span class="media-body"
                  ><span class="media-title">Amber Smith</span>
                  <small class="media-subtitle"
                    >Bring abundantly creature great behold...</small
                  >
                </span></a
              ><a href="#" class="media-icon"
                ><span
                  data-feather="x"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></a>
            </div>
            <div class="media media-success media-filled">
              <a href="#" class="media-link rui-messenger-item"
                ><span class="media-img">F</span>
                <span class="media-body"
                  ><span class="media-title">Frank Eaton</span>
                  <small class="media-subtitle"
                    >Porttitor facilisis quisque ultrices...</small
                  >
                </span></a
              ><a href="#" class="media-icon"
                ><span
                  data-feather="x"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></a>
            </div>
          </div>
        </div>
        <a
          class="btn rui-messenger-collapse-btn collapsed"
          data-toggle="collapse"
          href="#collapseOffline"
          role="button"
          aria-expanded="false"
          aria-controls="collapseOffline"
          >Offline
          <span
            data-feather="chevron-right"
            class="rui-icon rui-icon-stroke-1_5"
          ></span
        ></a>
        <div class="collapse" id="collapseOffline">
          <div class="rui-messenger-collapse">
            <div class="media media-warning media-filled">
              <a href="#" class="media-link rui-messenger-item"
                ><span class="media-img"
                  ><img src="./assets/images/avatar-2.png" alt="" /></span
                ><span class="media-body"
                  ><span class="media-title">Helen Holt</span>
                  <small class="media-subtitle"
                    >Upon us after sixth, under is appear...</small
                  >
                </span></a
              ><a href="#" class="media-icon"
                ><span
                  data-feather="x"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></a>
            </div>
            <div class="media media-warning media-filled">
              <a href="#" class="media-link rui-messenger-item"
                ><span class="media-img">S</span>
                <span class="media-body"
                  ><span class="media-title">Steven Cross</span>
                  <small class="media-subtitle"
                    >Us earth our sixth cattle great without...</small
                  >
                </span></a
              ><a href="#" class="media-icon"
                ><span
                  data-feather="x"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="rui-messenger-footer">
        <button type="button" class="btn btn-custom-round">
          <span
            data-feather="more-vertical"
            class="rui-icon rui-icon-stroke-1_5"
          ></span>
        </button>
        <button
          type="button"
          class="btn btn-brand btn-uniform btn-round btn-sm"
        >
          <span
            data-feather="plus"
            class="rui-icon rui-icon-stroke-1_5"
          ></span>
        </button>
      </div>
      <div class="rui-messenger-chat">
        <div class="rui-messenger-head">
          <a
            href="#"
            class="btn btn-clean btn-uniform btn-grey-5 rui-messenger-back"
            ><span
              data-feather="chevron-left"
              class="rui-icon rui-icon-stroke-1_5"
            ></span
          ></a>
          <h4 class="mnb-4">Amber Smith</h4>
          <div class="rui-messenger-head-empty"></div>
        </div>
        <div class="rui-messenger-body rui-scrollbar">
          <div>
            <div
              class="rui-messenger-message rui-messenger-message-structure"
            >
              <ul>
                <li></li>
              </ul>
              <div class="rui-messenger-message-edit">
                <a href="#" class="btn"
                  ><span
                    data-feather="edit-2"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span
                ></a>
                <a href="#" class="btn"
                  ><span
                    data-feather="trash"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span
                ></a>
              </div>
              <small class="rui-messenger-message-time"></small>
            </div>
            <small class="rui-messenger-message-datetime">2 days ago</small>
            <div class="rui-messenger-message rui-messenger-message-incoming">
              <ul>
                <li>The last album.</li>
                <li>I can’t open the last album!</li>
              </ul>
              <small class="rui-messenger-message-time">10:19</small>
            </div>
            <div class="rui-messenger-message rui-messenger-message-incoming">
              <ul>
                <li>Gues, I can’t open the last album...</li>
              </ul>
              <small class="rui-messenger-message-time">10:20</small>
            </div>
            <small class="rui-messenger-message-datetime">Today</small>
            <div class="rui-messenger-message">
              <ul>
                <li>123</li>
              </ul>
              <small class="rui-messenger-message-time">10:29</small>
              <div class="rui-messenger-message-edit">
                <a href="#" class="btn"
                  ><span
                    data-feather="edit-2"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span
                ></a>
                <a href="#" class="btn"
                  ><span
                    data-feather="trash"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span
                ></a>
              </div>
            </div>
            <div class="rui-messenger-message">
              <ul>
                <li>Haha Amber! You are so nice! :smile:</li>
              </ul>
              <small class="rui-messenger-message-time">10:30</small>
              <div class="rui-messenger-message-edit">
                <a href="#" class="btn"
                  ><span
                    data-feather="edit-2"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span
                ></a>
                <a href="#" class="btn"
                  ><span
                    data-feather="trash"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="rui-messenger-footer">
          <div class="input-group mnt-10 mnb-10">
            <div class="input-group-prepend mnl-2">
              <input
                type="file"
                class="rui-messenger-custom-file"
                id="customFileLang"
                lang="es"
              />
              <label
                class="btn btn-clean btn-uniform btn-grey-5 mb-0"
                for="customFileLang"
                ><span
                  data-feather="paperclip"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></label>
            </div>
            <textarea
              class="form-control form-control-clean rui-messenger-textarea"
              placeholder="Write a message..."
            ></textarea>
            <div class="input-group-append ml-2">
              <a
                href="#"
                class="
                  btn btn-clean btn-uniform btn-grey-5
                  rui-messenger-send
                "
                ><span
                  data-feather="send"
                  class="rui-icon rui-icon-stroke-1_5"
                ></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div
    class="toast rui-toast hide"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
    data-delay="8000"
    data-toast-show-on-startup="true"
  >
    <div class="toast-header">
      <h5 class="mr-auto mnb-2">RootUI</h5>
      <small class="toast-date">15 minutes ago</small>
      <button
        type="button"
        class="ml-15 mnt-4 mnr-4 toast-close close"
        data-dismiss="toast"
        aria-label="Close"
      >
        <span data-feather="x" class="rui-icon rui-icon-stroke-1_5"></span>
      </button>
    </div>
    <div class="toast-body">
      Hey, this is a demo notice. Click on the close button if you don't want
      to see it again.
    </div>
  </div>

  @include('admin.layouts.scripts')
