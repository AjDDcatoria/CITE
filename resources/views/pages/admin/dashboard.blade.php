@extends('pages.admin.index')

@section('content')
<section id="dashboard" class="flex-1 p-5">
    <div class="card bg-pink-100">
        <div class="icon bg-pink-300 ">
            <i class='bx bxs-graduation text-pink-600'></i>
        </div>
        <div class="title">
            Total Students
        </div>
        <div class="content">
            <label>7,482</label>
            <div class="text-green-600">
                <i class='bx bxs-up-arrow'></i>
                <span>14.9%</span>
            </div>
        </div>
    </div>
    <div class="card bg-gray-100">
        <div class="icon bg-gray-300">
            <i class='bx bxs-graduation text-gray-600'></i>
        </div>
        <div class="title">
            Total Instructors
        </div>
        <div class="content">
            <label>7,482</label>
            <div class="text-green-600">
                <i class='bx bxs-up-arrow'></i>
                <span>14.9%</span>
            </div>
        </div>
    </div>
    <div class="card bg-sky-100">
        <div class="icon bg-sky-300 ">
            <i class='bx bxs-graduation text-sky-600'></i>
        </div>
        <div class="title">
            Total Courses
        </div>
        <div class="content">
            <label>7,482</label>
        </div>
    </div>
    <div class="card bg-red-100">
        <div class="icon bg-red-300 ">
            <i class='bx bxs-graduation text-red-600'></i>
        </div>
        <div class="title">
            Total Rooms
        </div>
        <div class="content">
            <label>7,482</label>
        </div>
    </div>
    <div class="card">
        <div class="nested-card flex flex-col">
            <div class="title">
                Overview (Population)
            </div>
            <div class="content">
                <canvas id="myChart" style="width:100%"></canvas>
            </div>
        </div>
        <div class="nested-card">
            <div class="title">
                New Account
            </div>
            <div class="content">
                <ul class="flex flex-col gap-2 h-full overflow-auto">
                    @foreach ([1,2,3,4,5] as $item)
                    <li class="flex items-center gap-2 border-b border-gray-200 py-2">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                              <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt=""/>
                            </div>
                        </div>
                        <div class="leading-3">
                            <div class="font-semibold">{{ $user->firstname }} {{ $user->lastname }}</div>
                            <label class="text-xs font-normal">Computer Science</label>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
const xValues = ['Tandag','Tagbina','Cantilan','San miguel','Marihatag','Cagwait'];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [4240,1700,3200,1300,1142,2240],
      borderColor: "blue",
      fill: true
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>
@endsection
