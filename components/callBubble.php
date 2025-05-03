<!-- Floating Action Button -->
<!-- Floating Action Button -->
<div class="fab-container">
  <div class="fab" id="main-fab">
    <i class="fa fa-phone"></i>
  </div>
  <ul class="fab-options">
    <li>
      <a href="tel:+385976447492" class="fab-option">
        <i class="fa fa-phone"></i> 
      </a>
    </li>
    <li>
      <a href="https://wa.me/385976447492" target="_blank" class="fab-option">
        <i class="fa fa-whatsapp"></i>
      </a>
    </li>
    <li>
      <a href="mailto:saric.usluge@gmail.com" class="fab-option">
        <i class="fa fa-envelope"></i>
      </a>
    </li>
    <li>
      <a class="fab-option close-fab">
        <i class="fa fa-times"></i>
      </a>
    </li>
  </ul>
</div>

<!-- Font Awesome for icons (include this in your <head>) -->

<style>
/* FAB Container */
.fab-container {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  z-index: 1000;
}

/* Main FAB Button - Green Color */
.fab {
  background-color: #28a745; /* Green color */
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  cursor: pointer;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease;
}

/* FAB Options (Hidden by default) */
.fab-options {
  list-style: none;
  padding: 0;
  margin: 0;
  display: none;
  flex-direction: column;
  align-items: center;
}

/* FAB Option Styles */
.fab-option {
  background-color: #ffffff;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #555;
  margin: 10px 0;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s, opacity 0.3s;
}

/* Close Button Style */
.close-fab {
  background-color: #ff5a5f; /* Red color */
}

/* Icon size */
.fab-option i {
  font-size: 18px;
}

/* Animation when FAB Options are visible */
.fab.open + .fab-options {
  display: flex;
}

.fab.open {
  transform: rotate(45deg);
  visibility: hidden;
}


</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const mainFab = document.getElementById('main-fab');
  const fabOptions = document.querySelector('.fab-options');

  // Toggle FAB Options on main FAB click
  mainFab.addEventListener('click', function () {
    mainFab.classList.toggle('open');
    fabOptions.style.display = fabOptions.style.display === 'flex' ? 'none' : 'flex';
  });

  // Close FAB Options when close button is clicked
  document.querySelector('.close-fab').addEventListener('click', function () {
    mainFab.classList.remove('open');
    fabOptions.style.display = 'none';
  });
});

</script>

