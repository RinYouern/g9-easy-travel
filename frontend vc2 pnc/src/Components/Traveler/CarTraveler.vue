/ticket
<script>
import StarRating from '@/Components/Traveler/StarRating.vue'
export default {
  name: 'ItemsPage',
  components:{
    StarRating
  },
  data() {
    return {
      items: [
        {
          id: 1,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating:5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/e2/61/57/e261573597b8432a2d6ded480c497b22.jpg',
          name: 'Easy rent',
          location: 'Kompong Spue',
          rating:5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 3,
          image: 'https://i.pinimg.com/564x/3a/d0/95/3ad095f5600b280af6575deba1aee17f.jpg',
          name: 'Car fast',
          location: 'Banteay Mean Chey',
          rating:5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 4,
          image: 'https://i.pinimg.com/564x/1b/b9/b1/1bb9b11b13702c858e6a41647498a78e.jpg',
          name: 'Travel now',
          location: 'Pray Veng',
          rating:5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 5,
          image: 'https://i.pinimg.com/564x/d3/68/ae/d368ae8e68bf5208f74382a2b2153466.jpg',
          name: 'Phnom Oudong Rent-a-Car',
          location: 'Kampot',
          rating:5,
          link: '#',
          buttonText: 'View Detail'
        }
      ]
    }
  }
}
</script>

<style scoped>

.container {
  display: flex;
  justify-content: center;
}
.card-title{
  color: black;
  font: bold 25px "Times New Roman";
}
.card-text{
  color: gray;
  font-size: 15px;
}

.row {
  display: flex;
  justify-content: center;
  width: 100%;
}

.col-md-2.col-6 {
  flex: 0 0 20%;
  max-width: 20%;
  margin-bottom: 2rem;
  display: flex;
  justify-content: center;
}

.card {
  width: 100%;
  background-color: #f8f8f8;
  border: none;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  transition: background-color 0.3s, box-shadow 0.3s;
}

.card:hover {
  
  box-shadow: 10px 20px 30px rgba(0, 0, 0, 0.2);
}

.card-img-top {
  height: 200px;
  object-fit: cover;
  
}

.card-body {
  padding: 1rem;
}

.card-title {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.card-text {
  margin-bottom: 0.5rem;
}

.btn {
  width: 100%;
 
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  padding: 0.5rem 1rem;
}

.btn-primary {
  background-color: blue;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
}
.btn-primary:hover{
  background:red;
}
</style>