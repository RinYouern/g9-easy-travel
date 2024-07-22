<template>
  <h3 class="text-center mb-4">Top of Company Partner</h3>
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Location</th>
        <th>Rating</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in items" :key="item.id">
        <td>
          <img :src="item.image" :alt="item.name" class="table-image" />
        </td>
        <td>{{ item.name }}</td>
        <td>{{ item.location }}</td>
        <td>
          <StarRating :rating="item.rating" />
        </td>
        <td>
          <button class="btn btn-primary btn-sm" @click="showViewDialog(item)">{{ item.buttonText }}</button>
        </td>
      </tr>
    </tbody>
  </table>

  <el-dialog
    v-model="viewDialogVisible"
    title=" Company Partner Information"
    width="600px"
    :before-close="handleClose"
  >
  <hr>
    <div class="view-dialog">
      <div class="profile-image">
        <img :src="viewForm.image" :alt="viewForm.name" />
      </div>
      
      <div class="driver-info">
        <p><strong>Name:</strong> {{ viewForm.name }}</p>
        <p><strong>Location:</strong> {{ viewForm.location }}</p>
        <p><strong>Rating:</strong> <StarRating :rating="viewForm.rating" /></p>
        <!-- <a :href="viewForm.link" class="btn btn-primary btn-sm">{{ viewForm.buttonText }}</a> -->
      </div>
    </div>
  </el-dialog>
</template>

<script>
import StarRating from '@/Components/Traveler/StarRating.vue'

export default {
  name: 'ItemsPage',
  components: {
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
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/b8/a0/99/b8a099f793ce9c8e80fe6692cea05f84.jpg',
          name: 'Rent fast',
          location: 'Banteay mean chey',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 3,
          image: 'https://i.pinimg.com/736x/dd/41/dc/dd41dc273b9568c2ad662cd4c39f975b.jpg',
          name: 'Rent fast',
          location: 'Kampot',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 4,
          image: 'https://i.pinimg.com/736x/2b/d0/e5/2bd0e566f2a91aa5e295ebee5b20a093.jpg',
          name: 'Rent fast',
          location: 'Battambang',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 5,
          image: 'https://i.pinimg.com/564x/ef/9b/8f/ef9b8f4292fb7f38287f16f2fbb3bddc.jpg',
          name: 'Rent fast',
          location: 'Phnom Penh',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 6,
          image: 'https://i.pinimg.com/564x/22/09/c0/2209c08cf2de839986c306cbe70c03a2.jpg',
          name: 'Rent fast',
          location: 'Modulkiri',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        }
        // Rest of the items...
      ],
      viewDialogVisible: false,
      viewForm: {
        image: '',
        name: '',
        location: '',
        rating: 0,
        link: '',
        buttonText: ''
      }
    }
  },
  methods: {
    showViewDialog(item) {
      this.viewForm = {
        image: item.image,
        name: item.name,
        location: item.location,
        rating: item.rating,
        link: item.link,
        buttonText: item.buttonText
      }
      this.viewDialogVisible = true
    },
    handleClose(done) {
      this.viewDialogVisible = false
    }
  }
}
</script>

<style scoped>
h3 {
  text-align: center;
  color: black;
  font-weight: bold "Times New Roman";
}

.table-image {
  max-width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
}

.table {
  margin-top: 1rem;
  text-align: center;
  vertical-align: middle;
}

.btn {
  font-weight: bold;
}

.view-dialog {
  display: flex;
  align-items: center;
}


.profile-image {
  margin-right: 20px;
}

.profile-image img {
  max-width: 150px;
  border-radius: 50%;
}
.el-form {
  text-align: left;
}

.el-form-item {
  margin-bottom: 20px;
}
.el-input {
  width: 100%;
}
.view-dialog {
  display: flex;
  align-items: center;
  justify-content: center;
}

.profile-image {
  margin-right: 20px;
}

.profile-image img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
</style>