<?php if (!defined('MBG')) exit; ?>
<section class="hero-section bg-networkmap overflow-hidden position-relative">
  <!-- Decorative elements -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="opacity: 0.1; background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 50px 50px;"></div>
  
  <div class="container container-xxl position-relative z-index-1">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-10 mb-lg-0">
        <h1 class="hero-title text-white">
          Map Your Success: <br>
          <span style="color: #00d2ff;">Master Your Curriculum</span>
        </h1>
        <p class="hero-description text-white">
          Visualize your academic journey, track your progress, and never miss a requirement again. 
          The ultimate tracking tool for modern students.
        </p>
        <div class="d-flex flex-wrap gap-4">
          <a href="#" class="btn btn-nm-primary shadow-sm fs-4">Start Tracking for Free</a>
          <a href="#" class="btn btn-outline-white btn-active-light-primary border-2 rounded-pill px-10 fs-4 text-white">Learn More</a>
        </div>
        
        <div class="mt-15 d-flex align-items-center gap-4 text-white opacity-75">
          <div class="symbol-group symbol-hover">
            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Student A">
              <img src="/assets/media/avatars/300-1.jpg" alt="" />
            </div>
            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Student B">
              <img src="/assets/media/avatars/300-2.jpg" alt="" />
            </div>
            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Student C">
              <span class="symbol-label bg-primary text-inverse-primary fw-bold">1k+</span>
            </div>
          </div>
          <span class="fs-6 fw-semibold">Joined by 1,000+ students this semester</span>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="position-relative">
          <!-- Main Hero Image -->
          <div class="glass-panel p-3 animate-float shadow-lg">
            <img src="/networkmap/assets/img/hero_nm.png" class="img-fluid rounded shadow-sm" alt="Curriculum Map Illustration">
          </div>
          
          <!-- Floating cards -->
          <div class="position-absolute top-0 end-0 mt-n10 me-n10 glass-panel p-4 d-none d-md-block shadow-sm" style="width: 220px; background: rgba(255, 255, 255, 0.15);">
            <div class="d-flex align-items-center mb-2">
              <div class="symbol symbol-30px me-3">
                <span class="symbol-label bg-light-success">
                  <i class="ki-duotone ki-check fs-2 text-success"></i>
                </span>
              </div>
              <span class="fw-bold text-white fs-7">Degree Progress</span>
            </div>
            <div class="h-8px w-100 bg-white bg-opacity-10 rounded">
              <div class="bg-success rounded h-8px" style="width: 75%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
