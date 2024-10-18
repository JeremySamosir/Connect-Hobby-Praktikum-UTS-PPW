<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar and Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lacak.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/navbar.css">
    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>




<!-- Main content -->

<div class="status-header">
    <h2>    LACAK STATUS</h2>
</div>

    <div class="status-header-kecil">
</p>Showing 1-5 of 10 items.</p>
  </div>
  

    
<table>
  <tr>
    <th>#</th>
    <th>Deksripsi Kerusakan</th>
    <th>Lokasi Kerusakan</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Kerusakan idea hub yang tidak dapat hidup</td>
    <td>Gedung 711</td>
    <td><span class="status-container status-ditunda">Ditunda</span></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Lampu saung tengah gedung 7 redup</td>
    <td>Gedung 7</td>
    <td>
      <span class="status-container status-sukses">
        Sukses 
        <span class="arrow">&#9662;</span>
      </span>
      <div class="review-box" style="display: none;">
        <a href="<?php echo e(url('ulasan')); ?>" class="review-link">Beri Ulasan</a>
      </div>
    </td>
  </tr>
  
  <tr>
    <td>3</td>
    <td>AC panas</td>
    <td>Gedung 512</td>
    <td><span class="status-container status-diterima">Diterima</span></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Keran air kamar mandi rusak</td>
    <td>Kamar 14 LT 3 Asrama Mamre</td>
    <td><span class="status-container status-diterima">Diterima</span></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Penyangga bunkbed atas nama yohana tidak ada</td>
    <td>Kamar 14 LT 3 Asrama Mamre</td>
    <td><span class="status-container status-ditolak">Ditolak</span></td>
  </tr>
</table>

<div class="pagination">
    <a href="#" class="prev">&lt;&lt;</a>
    <a href="#" class="page active">1</a>
    <a href="#" class="page ">2</a>
    <a href="#" class="next">&gt;&gt;</a>
</div>


</body>
</html>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="js/lacak.js" defer></script>
    <script src="js/index.js" defer></script><?php /**PATH C:\Users\Indah\Herd\ppw\resources\views/lacak.blade.php ENDPATH**/ ?>