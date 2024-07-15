import { defineStore } from 'pinia';
import axiosInstance from '@/plugins/axios';

export const listCarStore = defineStore('listRecordsCar', {
  state: () => ({
    RecordsCar: []
  }),
  actions: {
    async fetchCars() {
      try {
        const accessToken = localStorage.getItem('access_token');
        if (!accessToken) {
          throw new Error('Access token not found');
        }

        const response = await axiosInstance.get('recordBooking', {
          headers: {
            Authorization: `Bearer ${accessToken}`
          }
        });

        this.RecordsCar = response.data;
      } catch (error) {
        console.error('Error fetching bookings records:', error);
        throw error;
      }
    }
  }
});
