<template>
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <p class="col-3">Ticket</p>
          <p class="col-2">Type</p>
          <p class="col-3">Description</p>
          <p class="col-1">Status</p>
          <p class="col-3">Date</p>
    </div>
    <!-- Card Body -->
    <div class="card-body d-flex flex-row align-items-center justify-content-between">
      <div class="col-3">
        <a href="#">Ticket#</a>
      </div>
      <div class="col-2">
        <span href="#">Type</span>
      </div>
      <div class="col-3">
        <span href="#">Description</span>
      </div>
      <div class="col-1">
        <i class="fas fa-check"></i>
      </div>
      <div class="col-3">
        <span href="#">2019/6/</span>
      </div>
    </div>

  </div>
</template>

<script>
    export default {
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
