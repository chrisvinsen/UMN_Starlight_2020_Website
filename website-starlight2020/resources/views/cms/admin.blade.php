<link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/material-dashboard/31144b3f/assets/css/material-dashboard.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  font-size: 1.3rem;
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
  font-size: 1.5rem;
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
  font-size: 1.5rem;
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
  font-size: 2rem;
}

.date svg {
  margin-left: 5px;
  height: 1rem;
  width: 1rem;
}

.heading {
  font-weight: bold;
  font-size: 1.5rem;
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
  font-size: 2rem;
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
  font-size: 1rem;
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
  .navlinks{
    font-size: 1.1rem;
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
          <!-- <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->

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
          <h2>{{$data_umum->stagename}}</h2>
          <div class="card__handle">
            <span class="handle">{{$data_umum->instagram}}</span>
            <span class="circle"></span>
            <span class="category">{{$data_umum->stagedescription}}</span>
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
          <li class="link__item active"><a data-toggle="tab" href="#data-umum">Data Umum</a></li>
          <li class="link__item" ><a data-toggle="tab" href="#pembayarann">Pembayaran</a></li>
          <li class="link__item" ><a data-toggle="tab" href="#anggota">Anggota 1</a></li>
          <li class="link__item" ><a data-toggle="tab" href="#anggota">Anggota 2</a></li>
          <li class="link__item" ><a data-toggle="tab" href="#anggota">Anggota 3</a></li>
        </ul>
      </nav>

<div class="tab-content">
  <!-- dataumum -->
      <div class="card__insights tab-pane fade in active" id="data-umum">

        <div class="card__heading">
          <div class="heading">Register Date :</div>
          <div class="date">
          {{$data_umum->created_at}}
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

        <div class="insights">

          <div class="insight">
            <div class="heading">
              Contact :
            </div>
            <div class="number" style="font-size: 16px;">
            <p><a style="text-decoration: none;" href="http://line.me/ti/p/~@dmn8577"><i class="lni lni-line"></i> {{$data_umum->line}}</a></p>

            <p style="text-decoration: none;" class="lni lni-phone"> {{$data_umum->phonenumber}}</p>
            </div>
          </div><!--Contact-->

          <div class="insight">
            <div class="heading">
              Token :
            </div>
            <div class="number">
            {{$data_umum->token}}
            </div>
          </div><!--Token-->

          <div class="insight">
            <div class="heading">
              Stage :
            </div>
            <div class="number">
            {{$data_umum->stage}}
              <div class="info">
                Status : {{$data_umum->status}}
                </svg>
              </div>
            </div>
          </div><!--Stage-->

        </div>
      </div><!--id-->
      <!-- pembayaran -->
      <div class="card__insights tab-pane fade" id="pembayarann">

        <div class="card__heading">
          <div class="heading">Register Date :</div>
          <div class="date">
          {{$data_umum->created_at}}
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

        <div class="insights">

        <div class="insight">
          <div class="heading">
          Nama Pengirim :
          </div>
          <div class="number" style="font-size: 16px;">
          <p>{{$data_umum->payment_name}}</p>

        </div>
        </div><!--Contact-->

        <div class="insight">
          <div class="heading">
          Nama & No. Bank :
          </div>
          <div class="number">
          <p>{{$data_umum->payment_bank}}</p>
          <p>{{$data_umum->payment_number}}</p>
          </div>
        </div><!--Nama dan Nomor Bank-->

        <div class="insight">
          <div class="heading">
          Bukti Transfer :
          </div>
        <div class="number">
            <img
            src="{{asset($data_umum->payment)}}"

          />
          <div class="info">
          </div>
        </div>
        </div><!--bukti transfer-->

        </div>
      </div><!--id2-->

      <!-- anggota -->
      <div class="card__insights tab-pane fade" id="anggota">

        <div class="card__heading">
          <div class="heading">Register Date :</div>
          <div class="date">
            {{$data_umum->created_at}}
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
        <div class="insight" style="font-size: 2rem;">
          <p>Full Name      : {{$data_individu[0]->fullname}}</p>
          <p>Birth of Date  : {{$data_individu[0]->birthdate}}</p>
          <p>School         : {{$data_individu[0]->school}}</p>
        </div>
        <div class="insights">


          <div class="insight">
            <div class="heading">
              Contact :
            </div>
            <div class="number" style="font-size: 16px;">
            <p><a style="text-decoration: none;" href="http://line.me/ti/p/~@dmn8577"><i class="lni lni-line"></i> {{$data_individu[0]->line}}</a></p>

            <p style="text-decoration: none;" class="lni lni-phone"> {{$data_individu[0]->phonenumber}}</p>
            </div>
          </div><!--Contact-->

          <div class="insight">
            <div class="heading">
              Address :
            </div>
            <div class="number">
              <p style="text-decoration: none; font-size: 16px;">{{$data_individu[0]->address}}</p>
            </div>
          </div><!--Alamat-->

          <div class="insight">
            <div class="heading">
              Bukti KTP :
            </div>
            <div class="number">
                <img
                src="{{asset($data_individu[0]->ktp)}}"

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
                src="{{asset($data_individu[0]->studentid)}}"

              />
              <div class="info">
              </div>
            </div>
          </div><!--Bukti Kartu Pelajar-->

        </div>
      </div><!--end anggota-->


      </div> <!--end tab content-->
      </div><!--End Content-->

    </div>
  </div>
</body>
