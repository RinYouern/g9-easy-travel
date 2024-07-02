<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  <div class="welcome-text">
    <div style="text-align: left; margin-top: -50px;">
      <a href="/place-traveler"><i class="bi bi-arrow-left-circle" style="font-size: 2.5rem"></i></a>
    </div>
    <div>
      <h1 class="title">Welcome to Angkor Wat</h1>
      <p class="description">
        Explore the grandeur of this ancient temple complex, a testament to the rich cultural
        heritage of Cambodia.
      </p>
    </div>
  </div>
  <div id="all" class="d-flex" style="width: 80%; margin: auto">
    <div style="width: 60%">
      <div class="bg-danger" style="height: 400px">
        <img src="@/assets/image/place/cambodia.jpg" alt="" />
      </div>
    </div>
    <div id="two" class="d-flex flex-column" style="width: 40%">
      <div class="bg-warning" style="height: 200px">
        <img src="https://i.pinimg.com/474x/2f/65/6e/2f656edd8b16b54181cd811925a33313.jpg" alt="" />
      </div>
      <div class="bg-primary" style="height: 200px">
        <img src="@/assets/image/place/angkor1.jpg" alt="" />
      </div>
    </div>
  </div>
  <div class="about-section">
    <div class="about-text">
      <h2 class="section-title">About Angkor Wat</h2>
      <p class="description">
        Angkor Wat stands as a testament to the rich cultural heritage of Cambodia, a colossal
        temple complex that is the crown jewel of the Khmer Empire's architectural achievements.
        Constructed in the early 12th century, this awe-inspiring masterpiece is the largest
        religious monument in the world, spanning over 400 acres and featuring intricate carvings,
        towering spires, and a serene moat that reflects the temple's grandeur.
      </p>
      <p class="section-title m-2">Location</p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13054.089494052227!2d103.86812711560894!3d13.412077656306403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110168aea9a272d%3A0x3eaba81157b0418d!2sAngkor%20Wat!5e0!3m2!1sen!2skh!4v1719910359049!5m2!1sen!2skh"
        width="1000"
        height="450"
        style="border:0 margin-top: 10px;;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style scoped>
#all {
  gap: 2px;
}
#two {
  gap: 2px;
}
.p-5 {
  padding: 1.25rem;
}

.d-flex {
  display: flex;
}

.bg-danger,
.bg-warning,
.bg-primary {
  overflow: hidden;
}

.bg-danger img,
.bg-warning img,
.bg-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.welcome-text {
  text-align: center;
  padding: 3rem 1rem;
  color: black;
  font-family: 'Playfair Display', serif;
}

.title {
  font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  margin-bottom: 1rem;
}

.description {
  font-size: 1.2rem;
  line-height: 1.6;
  max-width: 800px;
  margin: 0 auto;
}

.about-section {
  padding: 4rem 2rem;
  background-color: #f5f5f5;
}

.about-text {
  text-align: center;
  margin-bottom: 3rem;
}

.section-title {
  font-size: 2.5rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  color: #333;
}

.description {
  font-size: 1.2rem;
  line-height: 1.6;
  max-width: 800px;
  margin: 1rem auto 0;
  color: #555;
  text-align: justify;
}
</style>