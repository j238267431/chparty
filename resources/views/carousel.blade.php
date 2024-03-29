
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('img/carousel/1.png')}}" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('img/carousel/2.png')}}" alt="Chicago" style="width:100%;">
            </div>
            <div class="item">
                <img src="{{asset('img/carousel/3.png')}}" alt="New york" style="width:100%;">
            </div>
            <div class="item">
                <img src="{{asset('img/carousel/4.png')}}" alt="New york" style="width:100%;">
            </div>
            <div class="item">
                <img src="{{asset('img/carousel/5.png')}}" alt="New york" style="width:100%;">
            </div>
            <div class="item">
                <img src="{{asset('img/carousel/6.png')}}" alt="New york" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



