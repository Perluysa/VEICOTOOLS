  <!-- Content Header (Page header) -->
  <div class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tablero Principal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Tablero Principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row --> 
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

       <div class="container-fluid">

           <div class="row">

           <!--1-->
            <div class="col-lg-2">
             <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                 <h4 id="totalProductos"></h4>

                  <p> Productos</p>
                </div>
                <div class="icon">
                   <i class="fas fa-clipboard"></i>
                </div>
                 <a style="cursor: pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>

            <!--2-->
            <div class="col-lg-2">
             <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                 <h4 id="totalCompras"></h4>

                  <p>Total de Compras</p>
                </div>
                <div class="icon">
                   <i class="fas fa-money-bill-wave"></i>
                </div>
                 <a style="cursor: pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>


             <!--3-->
            <div class="col-lg-2">
             <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <h4 id="totalVentas"></h4>

                  <p>Total de Ventas</p>
                </div>
                <div class="icon">
                   <i class="fas fa-shopping-cart"></i>
                </div>
                 <a style="cursor: pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>

            <!--4-->
            <div class="col-lg-2">
             <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <h4 id="totalGanancias"></h4>

                  <p>Ganancias</p>
                </div>
                <div class="icon">
                   <i class="fas fa-chart-pie"></i>
                </div>
                 <a style="cursor: pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>

            <!--5-->
            <div class="col-lg-2">
             <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                 <h4 id="totalProductosPocoStock"></h4>

                  <p>Productos Poco Stock</p>
                </div>
                <div class="icon">
                   <i class="fas fa-arrow-alt-circle-down"></i>
                </div>
                 <a style="cursor: pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>

            <!--6-->
            <div class="col-lg-2">
             <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                 <h4 id="totalventasHoy"></h4>

                  <p>Ventas del Día</p>
                </div>
                <div class="icon">
                   <i class="fas fa-calendar-alt"></i>
                </div>
                 <a style="cursor: pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
            </div>

            </div>
           </div>

           <div class="row">
             <div class ="col-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height:300px; max-height: 350px; width:100%;">
                  </canvas>
                  </div>
                </div>
              </div>

             </div>
           </div>

       </div><!-- /.container-fluid -->
    </div>
    <!-- /.content --> 


    <script>
      $(document).ready(function(){
        
        $.ajax({
          url: "ajax/dashboard.ajax.php", 
          method: 'POST',
          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);
            $("#totalProductos").html(respuesta[0]['totalProductos']);
            $("#totalCompras").html('Cop/ ' + respuesta[0]['totalCompras'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));
            $("#totalVentas").html('Cop/ ' + respuesta[0]['totalVentas'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));

            $("#totalGanancias").html('Cop/ ' + respuesta[0]['ganancias'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));

            $("#totalProductosPocoStock").html( respuesta[0]['productosPocoStock']);
            $("#totalventasHoy").html('Cop/ ' + respuesta[0]['ventasHoy'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));
          }
        }); 

        setInterval(() => {
 
          $.ajax({
          url: "ajax/dashboard.ajax.php", 
          method: 'POST',
          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);
            $("#totalProductos").html(respuesta[0]['totalProductos']);
            $("#totalCompras").html('Cop/ ' + respuesta[0]['totalCompras'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));
            $("#totalVentas").html('Cop/ ' + respuesta[0]['totalVentas'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));

            $("#totalGanancias").html('Cop/ ' + respuesta[0]['ganancias'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));

            $("#totalProductosPocoStock").html( respuesta[0]['productosPocoStock']);
            $("#totalventasHoy").html('Cop/ ' + respuesta[0]['ventasHoy'].toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,"));
          }
        });
          
        }, 10000);

        $.ajax({
          url: "ajax/dashboard.ajax.php", 
          method: 'POST',
          data:{
            'accion' : 1 //parametro para la evntas del mes//
          },

          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);

            var fecha_venta =[];
            var total_venta =[];
            var total_ventas_mes = 0;

            for (let i = 0; i < respuesta.length; i++) {
              fecha_venta.push(respuesta[i]['fecha_venta']);
              total_venta.push(respuesta[i]['total_venta']);
              total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i]['total_venta']);
            }

            console.log(total_ventas_mes); 

            $(".card-title").html('Ventas del Mes: Cop/ ' + total_ventas_mes.toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"));

            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
              labels: fecha_venta,
              datasets: [
                 {
                   label: "Ventas del Mes",
                   backgroundColor: 'rgba(40,141,188,0.9)',  // Ajusté la opacidad
                   data: total_venta
                  }
                ]
              }
            
             var barChartData = $.extend(true, {}, areaChartData);
             var temp0 = areaChartData.datasets[0];

             barChartData.datasets[0] = temp0;

             var barChartOptions = {
                  maintainAspectRatio: false,
                  responsive: true,
                  events: false,
                  legend: {
                    display: true
                  },
                  animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function(){
                      var ctx = this.chart.ctx;
                      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', 
                                                          Chart.defaults.global.defaultFontFamily);
                      ctx.textAlign = 'center';
                      ctx.textBaseline = 'bottom';
                      
                      this.data.datasets.forEach(function(dataset){
                          for(var i = 0 ; i < dataset.data.length; i++){
                            var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                        scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                            ctx.fillStyle = '#444';
                            
                            var y_pos = model.y - 5;

                            // Make sure data value does not get overFlow and hidden
                            // When the bar's value is too clase to max value of scale
                            // Note: The y value is reverse, it counts from top down

                            if((scale_max - model.y) / scale_max >= 0.93){
                              y_pos = model.y + 20;
                            }
                            
                            ctx.fillText(dataset.data[i], model.x, y_pos);
                          }
                      });
                    }
                  }
                }

             new Chart(barChartCanvas, {
              type: 'bar',
              data: barChartData,
              options: barChartOptions

             })
          }
        });



      })

    </script>