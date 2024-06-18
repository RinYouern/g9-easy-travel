import { defineStore } from 'pinia';
import axiosInstance from '@/plugins/axios';

export const userStore = defineStore('user', {
  state: () => ({
    users: []
  }),
  actions: {
    async fetchUser() {
      try {
        const response = await axiosInstance.get('/me', {
          headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
          }
        });
        this.users = response.data.data;
      } catch (error) {
        console.error('Error fetching posts:', error);
      }
    }
  }
});
