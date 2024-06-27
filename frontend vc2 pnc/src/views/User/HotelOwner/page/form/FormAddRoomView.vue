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
          <input type="text" id="room-id" v-model="roomId" required />
        </div>
        <div class="form-group">
          <label for="people" class="text-dark">People:</label>
          <input type="number" id="people" v-model="people" required />
        </div>
        <button type="submit" class="btn btn_add">Add Room</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      roomId: '',
      people: 0
    };
  },
  methods: {
    addRoom() {
      console.log(`Room ID: ${this.roomId}, People: ${this.people}`);
      this.$emit('close');
    }
  }
};
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

.form-group input {
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
