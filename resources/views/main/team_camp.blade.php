@extends('layouts.main')

@section('content')
    <h1 class="title">
        Team Camp
    </h1>

    <div class="columns content">
        <div class="column is-7">
            <h4 class="has-text-weight-semibold">
                Come help us kick off another great season by joining us for our 4th annual team camp! The goal of the
                camp
                is to make us a better team -- by making everyone a better distance runner through training and
                education,
                while at the same time bringing us closer as a group.
            </h4>

            <h4>
                The camp will take place on the beautiful Berry College campus, which boasts miles of soft running
                trails on one of the safest and largest college campuses in the world.
            </h4>

            <h4>
                Like other running camps, each day will consist of some training runs, informational sessions, team
                activities and some free time. Unlike other running camps, however, our camp will be designed with only
                our
                team in mind which means we can be as flexible as we want while preparing for the upcoming 2018 cross
                country season. It promises to be a lot of fun!
            </h4>
        </div>

        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        2018 Team Camp
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <p><strong>Dates: </strong>Monday, July 16 - Friday, July 20</p>
                        <p><strong>Transportation: </strong>Bus will depart from Lambert Stadium Lot at 8:00 am Monday
                            morning and return Friday at Noon.</p>
                        <p><strong>Cost: </strong>$325 per runner. Please make checks out to LHSXC Booster Club and turn
                            in to Coach Tigue by Thursday, July 12.</p>
                        <p><strong>Sign Up: </strong><a href="https://goo.gl/forms/MOMGkHAvnxn1gF3Q2">2018 Team Camp
                                Registration</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns content">
        <div class="column is-4">
            <div class="box">
                <img src="{{url('images/fordBuildings.jpg')}}" alt="Berry Ford Buildings">
            </div>
        </div>

        <div class="column is-8">
            <h4></h4>
            <h4>The team camp will begin on the morning of Monday, July 16th and conclude on the morning of Friday, July
                20th. This year we will be providing bus transportation to and from the camp. While on campus, the
                runners and coaches (and any parents who wish to join us) will be staying at the Dana Residence Hall.
                Each dorm room is equipped with two twin beds and dressers. Linens are not provided.
            </h4>
            <h4>The cost of the camp will be $325 for each athlete which includes 4 nights lodging, 12 meals, limited
                accidental insurance, camp t-shirt, transportation in and around campus, and transportation to and from camp.</h4>
        </div>
    </div>

    <div class="content columns">
        <div class="column is-6">
            <h4><strong>What To Bring</strong></h4>
            <h4>Each camper should plan on bringing the following items:</h4>
            <ul>
                <li>Sheets for twin bed, pillow and blanket</li>
                <li>Bath Linens</li>
                <li>Toiletries</li>
                <li>Training Shoes (multiple pairs if you have them)</li>
                <li>Several sets of training clothing*</li>
                <li>Plenty of socks</li>
                <li>Bathing suit & towel</li>
                <li>Preferred snacks and drinks</li>
            </ul>
            <p>*The dorms are equipped with laundry rooms but please bring enough running clothes to last at least a couple of days.</p>
        </div>

        <div class="column is-5 is-offset-1">
            <h4><strong>Tentative Daily Schedule</strong></h4>
            <p>6:30 am: Morning Run</p>
            <p>8:00 am: Breakfast</p>
            <p>10:30 am: Team Activities</p>
            <p>12:00 pm: Lunch</p>
            <p>1:00 pm: Free Time</p>
            <p>3:00 pm: Swimming/Team Activity</p>
            <p>5:00 pm: Easy Run</p>
            <p>6:30 pm: Dinner</p>
            <p>8:00 pm: Team Activities</p>
        </div>
    </div>

    <div class="box">
        <img src="{{url('images/volleyball.jpg')}}" alt="Berry Camp Volleyball">
    </div>



@endsection