@extends('layouts.main')

@section('content')

    <div class="tile is-ancestor tile-container">

        <div class="tile is-vertical is-9">
            <div class="tile">

                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <div class="content announcements">
                            <h4>Sign-Up for the 2018 Cross Country Season!</h4>
                            <p>All <strong>new</strong> and <strong>returning</strong> runners will need to sign up for
                                the 2018 season by completing the registration form below. Registering will ensure that
                                you are added to the roster and that you are added to the email distribution list.</p>
                            <p><a href="https://drive.google.com/open?id=1vt4fsS3plVWc6dW3XkcBxWP256HVVQc8A9PTsamQDQU">2018
                                    Team Registration Form Form</a></p>

                            <h4>2018 Team Camp Information</h4>
                            <p>Hope you can join us for this year's team camp, which will be from Monday, July 16th to
                                Friday July 20th! This year we will be providing transportation to and from camp! More
                                information about the camp can be found here:</p>
                            <p><a href="{{url('https://longhorndistance.com/team_camp')}}">2018 Team Camp</a></p>

                        </div>
                    </article>
                </div>

                <div class="tile is-4 is-vertical">

                    <div class="tile">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Forms & Handouts</p>
                                <div class="content events">
                                    <p><a href="https://www.forsyth.k12.ga.us/page/24881">Physical Form and
                                            Information</a></p>
                                    <p><a href="https://drive.google.com/open?id=1dQTYcAtR5ruuPmqStV3Fv4tKEwlEmmAn">Information
                                            Meeting Quick Sheet</a></p>
                                    <p><a href="https://drive.google.com/open?id=1hJUE8Alc8j8YVE_4kycH9STHW1qRVkUc">2018
                                            Information Packet</a></p>
                                    <p><a href="https://drive.google.com/open?id=10_fwMsHXwNrAyDrgXlcCAdMuG6nADJ2H">2018
                                            Meet Schedule (Draft)</a></p>
                                {{--<p><a href="https://drive.google.com/open?id=0B8Ca2oFHpw8HeFZMN1UwR2FEY2s">2017 Sponsor Information</a></p>--}}
                                {{--<p><a href="https://drive.google.com/open?id=0B8Ca2oFHpw8HYlY4bW5pSzUzSUk">2017 Spirit Wear Flyer</a></p>--}}
                                {{--<p><a href="https://drive.google.com/open?id=0B8Ca2oFHpw8HX0RjSmR1MENMN0k">2017 Spirit Wear Order Form</a></p>--}}
                                {{--<h4>Area 3 Championship</h4>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/289728/results/554798/raw#.Wey9GWhSzcs">Varsity--}}
                                {{--Boys: 3rd</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/289728/results/554797/raw#.Wey9KWhSzcs">Varsity--}}
                                {{--Girls: 4th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/289728/results/554795/raw#.Wey9OWhSzcs">JV--}}
                                {{--Boys: 5th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/289728/results/554792/raw#.Wey9UWhSzcs">JV--}}
                                {{--Girls: 5th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/289728/results/554830/raw#.Wey9aGhSzcs">Open--}}
                                {{--Boys: 5th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/289728/results/554814/raw#.Wey9iGhSzcs">Open--}}
                                {{--Girls: 4th</a></h6>--}}

                                {{--<h4>Coach Wood Invite</h4>--}}
                                {{--<h6>--}}
                                {{--<a href="http://ga.milesplit.com/meets/278846/results/552387/formatted#.Wey8TWhSzcs">Varsity--}}
                                {{--Boys: 2nd</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/278846/results/552173/raw#.Wey8Z2hSzcs">Varsity--}}
                                {{--Girls: 12th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/278846/results/552175/raw#.Wey8fWhSzcs">JV--}}
                                {{--Boys: 8th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/278846/results/552179/raw#.Wey8qGhSzcs">JV--}}
                                {{--Girls: 6th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/278846/results/552191/raw#.Wey832hSzcs">Open--}}
                                {{--Boys: 7th</a></h6>--}}
                                {{--<h6><a href="http://ga.milesplit.com/meets/278846/results/552192/raw#.Wey8wmhSzcs">Open--}}
                                {{--Girls: 7th</a></h6>--}}

                                <!--          <h4>Great American XC Festival</h4>
                                                    <h6><a href="http://nc.milesplit.com/meets/286134/results/548976/formatted#.WeAMJmhSyUk">Championship Boys: 6th</a></h6>
                                                    <h6><a href="http://nc.milesplit.com/meets/286134/results/548977/formatted#.WeAMQmhSyUk">Varsity Girls: 9th</a></h6>
                                                    <h6><a href="http://nc.milesplit.com/meets/286134/results/548977/formatted#.WeAMQmhSyUk">Varsity Boys: 21st</a></h6>
                                                    <h6><a href="http://nc.milesplit.com/meets/286134/results/549019/formatted#.WeAMe2hSyUk">Varsity Girls: 26th</a></h6>
                                                    <h6><a href="http://nc.milesplit.com/meets/286134/results/549054/formatted#.WeAMoWhSyUk">JV Boys: 14th</a></h6>
                                                    <h6><a href="http://nc.milesplit.com/meets/286134/results/549070/formatted#.WeAMumhSyUk">JV Girls: NA</a></h6>

                                                    <h4>Wingfoot Classic</h4>
                                                    <h6><a href="http://ga.milesplit.com/meets/272824/results/543367/raw#.WdQrhGhSyUk">Varsity Boys: 4th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/272824/results/543370/raw#.WdQsG2hSyUk">Varsity Girls: 19th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/272824/results/543363/raw#.WdQr-GhSyUk">JV Boys: 9th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/272824/results/543364/raw#.WdQsO2hSyUk">JV Girls: 15th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/272824/results/543373/raw#.WdQsnmhSyUk">Open Boys: 8th</a></h6> -->

                                    <!-- <h4>Warpath Invitational</h4>
                                    <h6><a href="http://ga.milesplit.com/meets/272092/results/540279/raw#.WcG9KMh96Uk">Varsity Boys: 2nd</a></h6>
                                    <h6><a href="http://ga.milesplit.com/meets/272092/results/540272/raw#.WcG9Qch96Uk">Varsity Girls: 8th</a></h6>
                                    <h6><a href="http://ga.milesplit.com/meets/272092/results/540309/raw#.WcG9e8h96Uk">JV Boys: 3rd</a></h6>
                                    <h6><a href="http://ga.milesplit.com/meets/272092/results/540280/raw#.WcG9lch96Uk">JV Girls: 4th</a></h6>
                                    <h6><a href="http://ga.milesplit.com/meets/272092/results/540333/raw#.WcG9yMh96Uk">Open Boys: 3rd</a></h6>
                                    <h6><a href="http://ga.milesplit.com/meets/272092/results/540322/raw#.WcG97sh96Uk">Open Girls: 3rd</a></h6> -->

                                    <!--                 <h4>Furman XC Classic</h4>
                                                    <h6><a href="http://sc.milesplit.com/meets/265145/results/537686/raw#.WbgEfsiGOUk">Varsity Boys: 1st!</a></h6>
                                                    <h6><a href="http://sc.milesplit.com/meets/265145/results/537684/raw#.WbgEk8iGOUk">Varsity Girls: 1st!</a></h6>
                                                    <h6><a href="http://sc.milesplit.com/meets/265145/results/537746/raw#.WbgEpsiGOUk">JV Boys: 1st!</a></h6>
                                                    <h6><a href="http://sc.milesplit.com/meets/265145/results/537716/raw#.WbgEu8iGOUk">JV Girls: 1st!</a></h6> -->
                                    <!--                 <h4>Berry Invitational</h4>
                                                    <h6><a href="http://ga.milesplit.com/meets/283254/results/535785/raw#.Wa31hch96Uk">Varsity Boys: 4th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/283254/results/535773/raw#.Wa31nch96Uk">Varsity Girls: 9th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/283254/results/535788/formatted#.Wa31vch96Uk">JV Boys: 5th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/283254/results/535788/formatted#.Wa31vch96Uk">JV Girls: 3rd</a></h6> -->
                                    <!--                 <h4>Lambert River Run</h4>
                                                    <h6><a href="http://ga.milesplit.com/meets/279676/results/534569/raw#.WaMAmCh96Uk">Varsity Boys: 1st!</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/279676/results/534563/raw#.WaMBfih96Uk">Varsity Girls: 4th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/279676/results/534565/raw#.WaMBnyh96Uk">JV Boys: 5th</a></h6>
                                                    <h6><a href="http://ga.milesplit.com/meets/279676/results/534566/raw#.WaMBxyh96Uk">JV Girls: 3rd</a></h6> -->
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            {{--<div class="tile">--}}
                {{--<div class="tile is-parent is-vertical">--}}
                    {{--<article class="tile is-child box">--}}
                        {{--<p class="title">Girls Varsity ROW</p>--}}
                        {{--<div class="content">--}}


                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="tile is-child box">--}}
                        {{--<p class="title">Girls JV ROW</p>--}}
                        {{--<div class="content">--}}


                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="tile is-parent is-vertical">--}}
                    {{--<article class="tile is-child box">--}}
                        {{--<p class="title">Boys Varsity ROW</p>--}}
                        {{--<div class="content">--}}


                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="tile is-child box">--}}
                        {{--<p class="title">Boys JV ROW</p>--}}
                        {{--<div class="content">--}}


                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p class="title">News Clippings</p>
                        <div class="content">
                            <p>
                                <a href="https://www.forsythnews.com/sports/other-sports-news/cross-country-south-girls-lambert-boys-put-strong-finishes-great-american-meet/">Cross
                                    country: South girls, Lambert boys put in strong finishes in Great American meet</a>
                            </p>
                            <p>
                                <a href="https://www.forsythnews.com/sports/other-sports-news/cross-country-south-girls-win-wingfoot-classic-lambert-boys-finish-fourth/">Cross
                                    country: South girls win Wingfoot Classic, Lambert boys finish fourth</a></p>
                            <p>
                                <a href="https://www.forsythnews.com/sports/other-sports-news/cross-country-county-teams-take-titles-lambert-river-run/">County
                                    teams take titles at Lambert River Run</a></p>
                            <p>
                                <a href="https://www.forsythnews.com/sports/other-sports-news/cross-country-south-lambert-aim-extend-countys-dominance/">South,
                                    Lambert aim to extend County's dominance</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="tile is-parent">
            <article class="tile is-child box">
                <div class="content">
                    <p class="title">Upcoming Events</p>
                    <div class="content events">
                        <hr>

                        <h4>Summer Running Mileage Begins</h4>
                        <h6>Sunday, April 13th</h6>
                        <hr>
                        <h4>Summer Practice Begins</h4>
                        <h6>Tuesday, June 5th</h6>
                        <h6><span style="color:#73000a">@ </span>Lambert Track</h6>
                        <h6><span style="color:#73000a">Time: </span>6:30 am</h6>
                        <hr>
                        <h4>Team Camp</h4>
                        <h6>July 16 - July 20</h6>
                        <h6><span style="color:#73000a">@ </span>Berry College</h6>
                        <h6><a href="{{url('https://longhorndistance.com/team_camp')}}">Camp Information</a></h6>

                    </div>
                </div>
            </article>
        </div>

    </div>



@endsection



