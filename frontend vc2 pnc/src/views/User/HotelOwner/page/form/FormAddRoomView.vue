<template>
  <div class="modal">
    <div class="modal-content p-4">
      <div class="d-flex justify-content-between">
        <h2 class="text-dark">Add Room</h2>
        <span class="close text-danger" @click="$emit('close')">&times;</span>
      </div>
      <form @submit.prevent="addRoom">
        <div class="form-group">
          <label for="room-id" class="text-dark">Room ID:</label>
          <input type="text" id="room-id" v-model="room.room_id" required />
        </div>
        <div class="form-group">
          <label for="people" class="text-dark">People:</label>
          <input type="number" id="people" v-model="room.people" required />
        </div>
        <div class="form-group">
          <label for="price" class="text-dark">Price:</label>
          <input type="number" id="price" v-model="room.price" required />
        </div>
        <div class="form-group">
          <label for="bed-type" class="text-dark">Room Type:</label>
          <select id="bed-type" v-model="room.room_type" required>
            <option value="1">Single Bed</option>
            <option value="2">Double Bed</option>
          </select>
        </div>
        <button type="submit" class="btn btn_add">Add Room</button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import { userStore } from '@/stores/user-list'
export default {
  data() {
    return {
      room: {
        room_id: '',
        people: 0,
        price: 0,
        status: true,
        owner_id: 4,
        room_type: '1',
      }
    }
  },
  methods: {
    async addRoom() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/rooms', this.room)
        console.log('Room added:', response.data)
        this.$emit('close') // Close the modal on success
      } catch (error) {
        console.error('Error adding room:', error)
      }
    },
    fetchUser() {
      this.store.fetchUser()
    }
  }
}
</script>

<style scoped>
.modal {
  display: flex;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 500px;
  position: relative;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
}

.btn_add {
  background-color: #178de7;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

.btn_add:hover {
  background-color: #105b9c;
}
</style>