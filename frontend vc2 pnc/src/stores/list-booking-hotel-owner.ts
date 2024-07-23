import { defineStore } from 'pinia';
import axiosInstance from '@/plugins/axios';

// Define the store
export const useListBookingOwnerStore = defineStore('listBookingOwner', {
  state: () => ({
    listBookingOwner: []
  }),
  actions: {
    async fetchBookings() {
      try {
        const accessToken = localStorage.getItem('access_token');
        if (!accessToken) {
          throw new Error('Access token not found');
        }

        const response = await axiosInstance.get('/owner/bookings', {
          headers: {
            Authorization: `Bearer ${accessToken}`
          }
        });

        this.listBookingOwner = response.data;
      } catch (error) {
        console.error('Error fetching bookings records:', error);
        throw error;
      }
    }
  }
});