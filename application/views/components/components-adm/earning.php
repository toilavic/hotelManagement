<!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart" height="110%" style="display: block;"></canvas>
                    <script>

                      var ctx = document.getElementById('myAreaChart').getContext('2d');
                      var chart = new Chart(ctx, {
                          // The type of chart we want to create
                          type: 'line',

                          // The data for our dataset
                          data: {
                              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                              datasets: [{
                                  backgroundColor: 'rgb(255, 99, 132)',
                                  borderColor: 'rgb(255, 99, 132)',
                                  data: [0, 1060, 1540, 1340, 1220, 1830, 2500], //data here
                                  fill: false
                              }],
                          },

                          // Configuration options go here
                          options: {
                              legend: {
                                  display: false
                              },
                              tooltips: {
                                  callbacks: {
                                     label: function(tooltipItem) {
                                            return tooltipItem.yLabel;
                                     }
                                  }
                              }
                          }
                      });

                    </script>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myDNutChart" height="150%" style="display: block;"></canvas>
                    <script>

                      var ctx = document.getElementById('myDNutChart').getContext('2d');
                      var chart = new Chart(ctx, {
                          // The type of chart we want to create
                          type: 'doughnut',
                          data: {
                              labels: ['Direct','Social', 'Referral'],
                              datasets: [{
                                  backgroundColor: ['#4e73df','#1cc88a', '#36b9cc'],
                                  data:[10, 20, 30], //data here
                              }],
                          },
                          options: {
                              legend: {
                                  display: false
                              }
                          }
                      });

                    </script>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>