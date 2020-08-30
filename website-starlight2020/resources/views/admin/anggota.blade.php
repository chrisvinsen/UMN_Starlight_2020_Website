<link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/material-dashboard/31144b3f/assets/css/material-dashboard.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap");
:root {
  --primary: #323232;
  --light-bg: #f4f4f4;
  --border: #eee;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  font-family: Lato;
}

body {
  background-color: var(--light-bg);
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: var(--primary);
}

.card {
  width: 100%;
  max-width: 1400px;
  background-color: #fff;
  padding: 3rem;
}

.card__header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: -15px;
}

.card__profile img {
  border-radius: 50%;
  height: 5rem;
  width: 5rem;
  -o-object-fit: cover;
     object-fit: cover;
}

.card__name {
  margin-left: 1.25rem;
}

.card__handle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 3px;
}

.card__button svg {
  height: 1.05rem;
  width: 1.05rem;
  margin-right: 5px;
}

.card__button {
  margin-left: auto;
}

.card__button button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 1.05rem;
  background-color: var(--primary);
  color: white;
  font-weight: bold;
  border: none;
  height: 40px;
  width: 100px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
}

.card__button button:active {
  -webkit-transform: scale(0.96);
          transform: scale(0.96);
}

.card__heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

span.circle {
  height: 3px;
  width: 3px;
  background-color: var(--primary);
  border-radius: 50%;
  display: inline-block;
  margin: 0 8px;
}

.border {
  border-radius: 5px;
  height: 2px;
  background-color: var(--border);
  border: none;
  margin: 1.25rem 0;
}

.navlinks {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 1.25rem;
}

.navlinks li {
  opacity: 0.5;
  -webkit-transition: opacity 200ms ease-in-out;
  transition: opacity 200ms ease-in-out;
  cursor: pointer;
}

.navlinks li:first-child {
  opacity: 1;
  font-weight: bold;
}

.navlinks li:hover {
  opacity: 1;
}

.navlinks li + li {
  margin-left: 20px;
}

.date {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 0.85rem;
}

.date svg {
  margin-left: 5px;
  height: 1rem;
  width: 1rem;
}

.heading {
  font-weight: bold;
  font-size: 1.1rem;
}

.insights {
  margin: 2rem 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.insights .insight {
  width: 350px;
  padding: 1rem;
  border-radius: 8px;
  outline: 2px solid var(--border);
  -webkit-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}

.insights .insight:hover {
  color: white;
  background-color: var(--primary);
  outline: none;
}

.insights .insight .heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.insights .insight .heading .score {
  margin-left: auto;
}

.insights .insight .heading .score span {
  color: #44c790;
}

.insights .insight .heading span {
  font-size: 0.8rem;
}

.insight + .insight {
  margin-left: 1rem;
}

.number {
  font-size: 1.4rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  font-weight: bold;
  margin-top: 15px;
}

.number .info {
  font-size: 0.75rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-weight: normal;
}

.number .info svg {
  height: 15px;
  width: 15px;
}

@media (max-width: 1381px) {
  .insights {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .insights .insight:nth-child(3) {
    margin-top: 1rem;
  }
}

@media (max-width: 990px) {
  .insights {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .insights .insight + .insight {
    margin: 0;
    margin-top: 1rem;
  }
}

@media (max-width: 740px) {
  .card {
    width: 90%;
  }
  .navlinks {
    display: none;
  }
}

@media (max-width: 545px) {
  .card__button button {
    width: 40px;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .card__button button span {
    display: none;
  }
  .card__button button svg {
    margin-right: 0;
  }
}

@media (max-width: 475px) {
  .card__button {
    display: none;
  }
}

</style>
<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Starlighters
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#pablo">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
        </ul>
      </div>
      <div class="sidebar-background" style="background-image: url('https://images.unsplash.com/photo-1470770841072-f978cf4d019e?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=247b379684184e3794e14d34 00c7d629&amp;auto=format&amp;fit=crop&amp;w=9026&amp;q=80') ">         </div>
    </div>
 
    <div class="main-panel">
        <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            
          </div>
        </div>
      </nav>

      <div class="content text-center"><!--Masukin Content-->

      <div class="card">
      <div class="card__header">
        <div class="card__profile">
          <img
            src="#"
            alt="Random Image"
          
          />
        </div>

        <div class="card__name">
          <h2>Nama Stage</h2>
          <div class="card__handle">
            <span class="handle">@instagram</span>
            <span class="circle"></span>
            <span class="category">Stage Description</span>
          </div>
        </div><!--Nama Performers-->

        <div class="card__button">
          <!-- <button>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#fff"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-edit"
            >
              <path
                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
              ></path>
              <path
                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
              ></path>
            </svg>
            <span>Edit</span>
          </button> -->
        </div>
      </div>
      <hr class="border" />
      <nav>
        <ul class="navlinks">
          <li class="link__item">Data Umum</li>
          <li class="link__item" href="../admin/pembayaran">Pembayaran</li>
          <li class="link__item">Anggota 1</li>
          <li class="link__item">Anggota 2</li>
          <li class="link__item">Anggota 3</li>
        </ul>
      </nav>

      <div class="card__insights">

        <div class="card__heading">
          <div class="heading">Register Date :</div>
          <div class="date">
            32 Juli 2020
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-chevron-down"
            >
              <!-- <polyline points="6 9 12 15 18 9"></polyline> -->
            </svg>
          </div>
        </div><!--Date-->
        <br>
        <div class="insight">
          <p>Full Name      : Starlighters</p>
          <p>Birth of Date  : 24 Juli 2000</p>
          <p>School         : UMN</p>
        </div>
        <div class="insights">


          <div class="insight">
            <div class="heading">
              Contact :
            </div>
            <div class="number" style="font-size: 16px;">
            <p><a style="text-decoration: none;" href="http://line.me/ti/p/~@dmn8577"><i class="lni lni-line"></i> @252uzsbl</a></p>
           
            <p style="text-decoration: none;" class="lni lni-phone">08999838085</p>
            </div>
          </div><!--Contact-->

          <div class="insight">
            <div class="heading">
              Address :
            </div>
            <div class="number">
              <p style="text-decoration: none; font-size: 16px;">Scientia Boulevard, Tangerang Selatan.</p>
            </div>
          </div><!--Alamat-->

          <div class="insight">
            <div class="heading">
              Bukti KTP :
            </div>
            <div class="number">
                <img
                src="#"
              
              />
              <div class="info">
              </div>
            </div>
          </div><!--KTP-->

          <div class="insight">
            <div class="heading">
              Kartu Pelajar :
            </div>
            <div class="number">
                <img
                src="#"
              
              />
              <div class="info">
              </div>
            </div>
          </div><!--Bukti Kartu Pelajar-->

        </div>
      </div>
    </div>
      </div><!--End Content-->

    </div>
  </div>
</body>