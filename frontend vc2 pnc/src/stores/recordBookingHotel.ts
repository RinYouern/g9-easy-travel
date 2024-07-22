import { defineStore } from 'pinia';
import axiosInstance from '@/plugins/axios';

export const listHotelStore = defineStore('listRecords', {
  state: () => ({
    bookingsRecords: []
  }),
  actions: {
    async fetchCars() {
      try {
        const accessToken = localStorage.getItem('access_token');
        if (!accessToken) {
          throw new Error('Access token not found');
        }

        const response = await axiosInstance.get('/user-bookings', {
          headers: {
            Authorization: `Bearer ${accessToken}`
          }
        });

        this.bookingsRecords = response.data;
      } catch (error) {
        console.error('Error fetching bookings records:', error);
        throw error;
      }
    }
  }
});
