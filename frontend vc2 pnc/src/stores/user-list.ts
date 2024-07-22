import { defineStore } from 'pinia';
import axiosInstance from '@/plugins/axios';

export const userStore = defineStore('user', {
  state: () => ({
    users: [],
    accessToken: null,
  }),
  actions: {
    async fetchUser() {
      try {
        const response = await axiosInstance.get('/me', {
          headers: {
            Authorization: `Bearer ${this.accessToken}`,
          },
        });
        this.users = response.data.data;
      } catch (error) {
        console.error('Error fetching user:', error);
      }
    },
    logout() {
      try {
        axiosInstance.post('/logout', null, {
          headers: {
            Authorization: `Bearer ${this.accessToken}`,
          },
        });
        this.accessToken = null;
        localStorage.removeItem('access_token');
      } catch (error) {
        console.error('Error logging out:', error);
      }
    },
  },
});