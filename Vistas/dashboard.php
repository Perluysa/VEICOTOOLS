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
              <h4 id="totalProductos">11</h4>

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
              <h4 id="totalProductos">$./ 1.000.000</h4>

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
              <h4 id="totalProductos">$./ 2.000.000</h4>

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
              <h4 id="totalProductos">$./ 2.000</h4>

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
              <h4 id="totalProductosMinStock">1</h4>

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
              <h4 id="totalVentasHoy">$./ 0.00</h4>

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
  </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->


  <script>
    $(document).ready(function() {

      $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        dataType: 'json',
        success: function(respuesta) {
          console.log("respuesta", respuesta);
        }
      });
    })
  </script>