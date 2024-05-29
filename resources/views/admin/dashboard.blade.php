<x-app-layout>
<div class="overview mt-5">
    <div class="view">
        <div class="icon">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="details">
            <span>50</span>
            <span>Total Students</span>
        </div>
    </div>
    <div class="view">
        <div class="icon">
            <i class="fa-solid fa-chalkboard-user"></i>
        </div>
        <div class="details">
            <span>30</span>
            <span>Total Instructors</span>
        </div>
    </div>
    <div class="view">
        <div class="icon">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <div class="details">
            <span>2</span>
            <span>Total Subjects</span>
        </div>
    </div>
    <div class="view">
        <div class="icon">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <div class="details">
            <span>2</span>
            <span>Pending Courses</span>
        </div>
    </div>
    <div class="view">
        <div class="icon">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <div class="details">
            <span>2</span>
            <span>Pending Courses</span>
        </div>
    </div>
</div>

<div class="charts mt-6">

    <div class="chart_wrap flex gap-7 mt-5">
        <div class="chart w-2/4 py-4 px-7 bg-white">
            <div class="head">Popular Subjects</div>
            <canvas id="chart1"></canvas>
        </div>
        <div class="chart w-2/4 py-4 px-7 bg-white">
            <div class="head">New Students</div>
            <canvas id="chart2"></canvas>
        </div>
    </div>

    <div class="chart_wrap flex gap-7 mt-5">
        <div class="chart w-2/4 py-4 px-7 bg-white">
            <div class="head">New Instructors</div>
            <canvas id="chart3"></canvas>
        </div>
    </div>
</div>
</x-app-layout>
