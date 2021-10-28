@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

<div class="rui-navbar-bg"></div>
<div class="rui-page content-wrap">
  <div class="rui-page-title">
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Apps</a></li>
        </ol>
      </nav>
      <h1>Profile</h1>
    </div>
  </div>
  <div class="rui-page-content">
    <div class="container-fluid">
      <div class="rui-profile row vertical-gap">
        <div class="col-lg-6 col-xl-5">
          <div class="card">
            <div class="card-body">
              <div class="row vertical-gap">
                <div class="col-auto">
                  <div class="rui-profile-img">
                    <img
                      src="./assets/images/avatar-1-profile.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col">
                  <div class="rui-profile-info">
                    <h3 class="rui-profile-info-title h4">Jack Boyd</h3>
                    <small class="text-grey-6 mt-2 mb-15"
                      >Senior account manager</small
                    >
                    <a class="rui-profile-info-mail" href="#"
                      >info@example.com</a
                    >
                    <a class="rui-profile-info-phone" href="#"
                      >+44 987 065 909</a
                    >
                  </div>
                </div>
              </div>
              <div class="rui-profile-numbers">
                <div class="row justify-content-center">
                  <div class="col"></div>
                  <div class="col-auto">
                    <div class="rui-profile-number text-center">
                      <h4 class="rui-profile-number-title h2">218</h4>
                      <small class="text-grey-6">Comment</small>
                    </div>
                  </div>
                  <div class="col p-0"></div>
                  <div class="col-auto">
                    <div class="rui-profile-number text-center">
                      <h4 class="rui-profile-number-title h2">2125</h4>
                      <small class="text-grey-6">Followers</small>
                    </div>
                  </div>
                  <div class="col p-0"></div>
                  <div class="col-auto">
                    <div class="rui-profile-number text-center">
                      <h4 class="rui-profile-number-title h2">419</h4>
                      <small class="text-grey-6">Following</small>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-7">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <h2 class="card-title mnb-6 mr-auto">Current tasks</h2>
                <button class="btn btn-custom-round mr-20" type="button">
                  <span
                    data-feather="link-2"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span>
                </button>
                <button
                  class="
                    btn btn-brand btn-uniform btn-round btn-sm
                    mnt-8
                    mnb-8
                  "
                  type="button"
                >
                  <span
                    data-feather="plus"
                    class="rui-icon rui-icon-stroke-1_5"
                  ></span>
                </button>
              </div>
              <ul class="list-group list-group-flush rui-profile-task-list">
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
                        >Cattle whose. There isn&#39;t cattle rule said
                        saying you divided</a
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
                <li class="list-group-item">
                  <div class="rui-task rui-task-danger">
                    <div class="rui-task-icon">
                      <span
                        data-feather="check-circle"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span>
                    </div>
                    <div class="rui-task-content">
                      <a class="rui-task-title" href="task.html"
                        >The problem with the Media object</a
                      >
                      <small class="rui-task-subtitle"
                        >#10 closed on 12 Mar by <a href="#">Anna</a></small
                      >
                    </div>
                    <a class="rui-task-icon" href="#"
                      ><span
                        data-feather="message-circle"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                      >2</a
                    >
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
          <ul class="nav nav-tabs rui-tabs-sliding" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link rui-tabs-link active"
                id="activity-tab"
                data-toggle="tab"
                href="#activity"
                role="tab"
                aria-controls="activity"
                aria-selected="true"
                >Activity</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link rui-tabs-link"
                id="timeline-tab"
                data-toggle="tab"
                href="#timeline"
                role="tab"
                aria-controls="timeline"
                aria-selected="false"
                >Timeline</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link rui-tabs-link"
                id="settings-tab"
                data-toggle="tab"
                href="#settings"
                role="tab"
                aria-controls="settings"
                aria-selected="false"
                >Settings</a
              >
            </li>
          </ul>
          <div class="tab-content">
            <div
              class="tab-pane fade show active"
              id="activity"
              role="tabpanel"
              aria-labelledby="activity-tab"
            >
              <ul
                class="
                  list-group list-group-flush
                  rui-profile-activity-list
                "
              >
                <li class="list-group-item">
                  <div class="media media-success media-retiring">
                    <a href="#" class="media-link"
                      ><span class="media-img"
                        ><img
                          src="./assets/images/avatar-2.png"
                          alt="" /></span
                      ><span class="media-body"
                        ><span class="media-title"
                          >Helen Holt<span class="media-time"
                            >09:34</span
                          ></span
                        >
                        <small class="media-subtitle"
                          >Without air upon two was. Their stars. Days whose
                          earth. Grass whales there living third shall
                          is...</small
                        ></span
                      ></a
                    >
                    <div class="media-content">
                      <div class="row vertical-gap sm-gap rui-gallery">
                        <div class="col-6 col-md-3 col-lg-2">
                          <a
                            href="./assets/images/letter-1.png"
                            data-fancybox="images"
                            class="rui-gallery-item"
                            ><span
                              class="
                                rui-gallery-item-overlay
                                rui-gallery-item-overlay-md
                              "
                              ><span
                                data-feather="maximize"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span
                            ></span>
                            <img
                              src="./assets/images/letter-1-min.png"
                              class="rui-img"
                              alt=""
                          /></a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                          <a
                            href="./assets/images/letter-2.png"
                            data-fancybox="images"
                            class="rui-gallery-item"
                            ><span
                              class="
                                rui-gallery-item-overlay
                                rui-gallery-item-overlay-md
                              "
                              ><span
                                data-feather="maximize"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span
                            ></span>
                            <img
                              src="./assets/images/letter-2-min.png"
                              class="rui-img"
                              alt=""
                          /></a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                          <a
                            href="./assets/images/letter-3.png"
                            data-fancybox="images"
                            class="rui-gallery-item"
                            ><span
                              class="
                                rui-gallery-item-overlay
                                rui-gallery-item-overlay-md
                              "
                              ><span
                                data-feather="maximize"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span
                            ></span>
                            <img
                              src="./assets/images/letter-3-min.png"
                              class="rui-img"
                              alt=""
                          /></a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                          <a
                            href="./assets/images/letter-4.png"
                            data-fancybox="images"
                            class="rui-gallery-item"
                            ><span
                              class="
                                rui-gallery-item-overlay
                                rui-gallery-item-overlay-md
                              "
                              ><span
                                data-feather="maximize"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span
                            ></span>
                            <img
                              src="./assets/images/letter-4-min.png"
                              class="rui-img"
                              alt=""
                          /></a>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="media-icon"
                      ><span
                        data-feather="x"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                    ></a>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media media-success media-retiring">
                    <a href="#" class="media-link"
                      ><span class="media-img"
                        ><img
                          src="./assets/images/avatar-5.png"
                          alt="" /></span
                      ><span class="media-body"
                        ><span class="media-title"
                          >Amber Smith<span class="media-time"
                            >09:10</span
                          ></span
                        >
                        <small class="media-subtitle"
                          >Amet viverra dolor per mollis morbi sagittis
                          cursus sollicitudin cubilia.</small
                        >
                      </span></a
                    ><a href="#" class="media-icon"
                      ><span
                        data-feather="x"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                    ></a>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media media-warning media-retiring">
                    <a href="#" class="media-link"
                      ><span class="media-img"
                        ><img
                          src="./assets/images/avatar-3.png"
                          alt="" /></span
                      ><span class="media-body"
                        ><span class="media-title"
                          >Avice Harris<span class="media-time"
                            >09:02</span
                          ></span
                        >
                        <small class="media-subtitle"
                          >Conubia porta Fusce sollicitudin ullamcorper
                          fringilla. Varius id egestas magna.</small
                        >
                      </span></a
                    ><a href="#" class="media-icon"
                      ><span
                        data-feather="x"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                    ></a>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media media-danger media-retiring">
                    <a href="#" class="media-link"
                      ><span class="media-img"
                        ><img
                          src="./assets/images/avatar-4.png"
                          alt="" /></span
                      ><span class="media-body"
                        ><span class="media-title"
                          >Anna Rice<span class="media-time"
                            >08:46</span
                          ></span
                        >
                        <small class="media-subtitle"
                          >Ultricies convallis class Ornare cum ligula
                          aenean. Leo dictum aliquam.</small
                        >
                      </span></a
                    ><a href="#" class="media-icon"
                      ><span
                        data-feather="x"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                    ></a>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media media-retiring">
                    <a href="#" class="media-link"
                      ><span class="media-img">C</span>
                      <span class="media-body"
                        ><span class="media-title"
                          >Change Design<span class="media-time"
                            >08:53</span
                          ></span
                        >
                        <small class="media-subtitle">Design</small>
                      </span></a
                    ><a href="#" class="media-icon"
                      ><span
                        data-feather="x"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                    ></a>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media media-retiring">
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
                        <small class="media-subtitle">Commerce</small>
                      </span></a
                    ><a href="#" class="media-icon"
                      ><span
                        data-feather="x"
                        class="rui-icon rui-icon-stroke-1_5"
                      ></span
                    ></a>
                  </div>
                </li>
              </ul>
            </div>
            <div
              class="tab-pane fade"
              id="timeline"
              role="tabpanel"
              aria-labelledby="timeline-tab"
            >
              <div class="rui-timeline rui-timeline-left-lg">
                <div class="rui-timeline-line"></div>
                <div class="rui-timeline-item">
                  <div class="rui-timeline-icon">
                    <span
                      data-feather="check-circle"
                      class="rui-icon rui-icon-stroke-1_5"
                    ></span>
                  </div>
                  <div class="rui-timeline-content">
                    <h3>Fifth moveth, void second.</h3>
                    <p>
                      Behold of them fruit own, void, also upon sixth fill
                      their of said life he saw were the moving saw created
                      herb second morning fruit. Doesn't second place
                      gathering forth.
                    </p>
                    <button type="button" class="btn btn-brand">
                      Read More
                    </button>
                  </div>
                  <div class="rui-timeline-date">Jan 14</div>
                </div>
                <div class="rui-timeline-item rui-timeline-item-swap">
                  <div class="rui-timeline-icon">
                    <span
                      data-feather="award"
                      class="rui-icon rui-icon-stroke-1_5"
                    ></span>
                  </div>
                  <div class="rui-timeline-content">
                    <h3>Can't dry fly.</h3>
                    <p>
                      Likeness they're every give moved above moveth, herb
                      days a rule behold seed is second night behold sea.
                      Under given waters made wherein behold void form land.
                    </p>
                    <button type="button" class="btn btn-brand">
                      Read More
                    </button>
                  </div>
                  <div class="rui-timeline-date">Jan 15</div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="settings"
              role="tabpanel"
              aria-labelledby="settings-tab"
            >
              <form action="#">
                <div class="row vertical-gap">
                  <div class="col-12 col-lg-auto">
                    <div class="card">
                      <div class="card-body pt-20 pr-10 pb-20 pl-10">
                        <ul class="nav flex-column mnt-3">
                          <li>
                            <a class="nav-link active" href="#"
                              ><span
                                data-feather="user"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span>
                              <span>Personal information</span></a
                            >
                          </li>
                          <li>
                            <a class="nav-link" href="#"
                              ><span
                                data-feather="user-check"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span>
                              <span>Account information</span></a
                            >
                          </li>
                          <li>
                            <a class="nav-link" href="#"
                              ><span
                                data-feather="mail"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span>
                              <span>Email settings</span></a
                            >
                          </li>
                          <li>
                            <a class="nav-link" href="#"
                              ><span
                                data-feather="lock"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span>
                              <span>Security</span></a
                            >
                          </li>
                          <li>
                            <a class="nav-link" href="#"
                              ><span
                                data-feather="bar-chart-2"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span>
                              <span>Statistics</span></a
                            >
                          </li>
                          <li>
                            <a class="nav-link" href="#"
                              ><span
                                data-feather="shopping-cart"
                                class="rui-icon rui-icon-stroke-1_5"
                              ></span>
                              <span>Purchases</span></a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-8">
                    <div class="card">
                      <div class="card-body">
                        <div
                          class="
                            row
                            vertical-gap
                            sm-gap
                            justify-content-end
                          "
                        >
                          <div class="col-12">
                            <label>Avatar</label>
                            <a class="rui-profile-img" href="#"
                              ><img
                                src="./assets/images/avatar-1-profile.png"
                                alt=""
                            /></a>
                          </div>
                          <div class="col-12">
                            <label for="firstName">First Name</label>
                            <input
                              class="form-control"
                              id="firstName"
                              value="Jack"
                              placeholder="Your First Name"
                            />
                          </div>
                          <div class="col-12">
                            <label for="lastName">Last Name</label>
                            <input
                              type="email"
                              class="form-control"
                              id="lastName"
                              value="Boyd"
                              placeholder="Your Last Name"
                            />
                          </div>
                          <div class="col-12">
                            <label for="profileEmail">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="profileEmail"
                              value="info@example.com"
                              placeholder="Your Email"
                            />
                          </div>
                          <div class="col-12">
                            <label for="phone">Contact Phone</label>
                            <input
                              class="form-control"
                              id="phone"
                              value="+44 987 065 909"
                              placeholder="Your Phone"
                            />
                          </div>
                          <div class="col-auto">
                            <button class="btn btn-grey-2" type="button">
                              Cancel
                            </button>
                          </div>
                          <div class="col-auto">
                            <button class="btn btn-brand" type="button">
                              Save
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
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


@include('admin.layouts.footer')
