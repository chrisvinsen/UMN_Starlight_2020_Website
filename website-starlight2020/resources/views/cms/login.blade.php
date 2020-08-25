
<style>
body
{
    background: rgb(87, 87, 87);
}

.container
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    border-radius: 20px;

}

.card
{
    border-radius: 20px;
    height: 600px;
    background: rgb(217,3,3);
    background: linear-gradient(180deg, rgba(217,3,3,1) 0%, rgba(163,2,2,1) 48%, rgba(39,0,0,1) 89%);
    border: none;
    overflow: hidden;
    box-shadow: 0 5px 8px #414141;
    z-index: 0;
    box-sizing: border-box;
}



.circle
{

    position: absolute;
    bottom: -230px;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #ffffff;
    clip-path: circle(50%);
    height: 700px;
    width: 700px;
    z-index: -1; 
    overflow: hidden;

}


.far
{
    font-size: 40px;
}

.fas
{
    position: relative;
    display: block;
    left: -87px;
    top: 30px;
    color: rgb(255, 255, 255);
}

.button
{
    width: 250px;
    border-radius: 25px;
    background: rgb(217,3,3);
    background: linear-gradient(180deg, rgba(217,3,3,1) 0%, rgba(163,2,2,1) 48%, rgba(39,0,0,1) 89%);
    color: #ffffff;
    font-weight: 700;
    
}

.myInput
{
    width: 220px;
    padding: 10px;
    padding-left: 40px;
    border-radius: 25px;
    background: rgb(217,3,3);
    background: linear-gradient(180deg, rgba(217,3,3,1) 0%, rgba(163,2,2,1) 48%, rgba(39,0,0,1) 89%);
    color: #fff;
    border: none;
    display: block;
}

.myInput::placeholder
{
    color: #fff;
    opacity: 0.6;
}

.myInput:focus
{
    border: none;
    outline: none;
}

.check_1
{
    font-weight: 500;
    color: rgb(85, 85, 85);
    font-size: 12px;
    margin: 15px auto;
    cursor: pointer;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
@section('content')
<div class="container">
        <div class="card">
            <div class="card-body">
                <div class="circle"></div>
                <header class="myHed text-center">
                <img src="{{ asset('images/core-img/Logo_starlight_fix.png') }}" style="width: 20%; height: 20%;" class="img-responsive">
                </header>
                <form class="main-form text-center" method="POST" action="{{ route('login') }}">

                        <div class="form-group my-0">
                                <label class="my-0">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class="myInput" placeholder="{{ __('Username') }}">
                                   
                                </label>
                        </div>
                        
                        <div class="form-group my-0">
                            <label>
                                <i class="fas fa-lock"></i>
                                <input type="password" class="myInput" placeholder="{{ __('Password') }}">
                               
                            </label>
                        </div>
                        <label class="check_1"><input type="checkbox" checked>{{ __('Remember Me') }}</label>

                        <div class="form-group">
                            <label>
                                <input type="button" class="form-control button" value="{{ __('Login') }}">
                            </label>
                        </div>
                </form>
            </div>
        </div>
    </div>
