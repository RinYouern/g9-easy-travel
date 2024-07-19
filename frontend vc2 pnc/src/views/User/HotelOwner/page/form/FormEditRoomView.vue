<template>
  <div class="modal">
    <div class="modal-content">
      <span class="close-button" @click="$emit('close')">&times;</span>
      <h2>Edit Room</h2>
      <form @submit.prevent="editRoom">
        <div class="form-group">
          <label for="people">People:</label>
          <input type="number" v-model="formData.people" id="people" class="form-control" required />
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="number" v-model="formData.price" id="price" class="form-control" required />
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select v-model="formData.status" id="status" class="form-control" required>
            <option value="1">Available</option>
            <option value="0">Not Available</option>
          </select>
        </div>
        <div class="form-group d-flex justify-content-end">
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <button type="button" class="btn btn-danger" @click="$emit('close')">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    room: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      formData: { ...this.room }
    }
  },
  methods: {
    async editRoom() {
      try {
        await axios.put(`http://127.0.0.1:8000/api/rooms/${this.room.id}`, this.formData);
        this.$emit('update');
        this.$emit('close');
      } catch (error) {
        console.error('Error updating room:', error);
      }
    }
  }
}
</script>

<style scoped>
.modal {
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  width: 400px;
  max-width: 90%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  position: relative;
}

.close-button {
  color: #aaa;
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close-button:hover,
.close-button:focus {
  color: #000;
}

.form-group {
  margin-bottom: 20px;
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
  border: 1px solid #ccc;
  border-radius: 4px;
}
</style>
