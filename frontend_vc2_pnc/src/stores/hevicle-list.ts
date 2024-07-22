import { defineStore } from 'pinia';
import axiosInstance from '@/plugins/axios';

export const listCarStore = defineStore('listCar', {
  state: () => ({
    cars: []
  }),
  actions: {
    async fetchCars() {
      try {
        const accessToken = localStorage.getItem('access_token');
        if (!accessToken) {
          throw new Error('Access token not found');
        }

        const response = await axiosInstance.get('/vehicles', {
          headers: {
            Authorization: `Bearer ${accessToken}`
          }
        });
        this.cars = response.data;
      } catch (error) {
        console.error('Error fetching cars:', error);
        throw error;
      }
    }
  }
});