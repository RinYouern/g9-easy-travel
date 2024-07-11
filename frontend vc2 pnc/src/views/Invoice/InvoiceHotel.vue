<template>
  <div class="container p-5">
    <div class="demo-type d-flex justify-content-center">
  <img :src="profileHotel" class="rounded-circle" style="width: 100px; height: 100px;" />
</div>
    <div class="invoice-details">
      <div class="text-center"><strong>Invoice #:</strong> 123456</div>
    </div>
    <div class="d-flex flex-column">
      <div class="d-flex justify-content-between">
        <div><strong>Booker Name:</strong> {{ bookerName }}</div>
        <div><strong>Booker Phone:</strong> {{ bookerPhone }}</div>

      </div>
      <div class="d-flex justify-content-between">
        <div><strong>Booker Email:</strong> {{ bookerEmail }}</div>
        <div><strong>Hotel Location:</strong> {{ hotelLocation }}</div>
      </div>
      <div class="d-flex justify-content-between">
        <div><strong>Check-in Date:</strong> {{ checkInDate }}</div>
        <div><strong>Check-out Date:</strong> {{ checkOutDate }}</div>
      </div>
    </div>

    <table class="invoice-table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ roomID }}</td>
          <td>{{ quantityOfNights }}</td>
          <td>{{ '$' + price.toFixed(2)/2 }}</td>
          <td>{{ '$' + (quantityOfNights * price/2).toFixed(2) }}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3" class="invoice-total">Total:</td>
          <td class="invoice-total">{{ '$' + (quantityOfNights * price).toFixed(2)/2 }}</td>
        </tr>
      </tfoot>
    </table>

    <div class="invoice-footer">
      <div class="footer-divider"></div>
      <p>Thank you for your business!</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      bookerName: '',
      bookerPhone: '',
      bookerEmail: '',
      checkInDate: '',
      checkOutDate: '',
      hotelLocation: '',
      profileHotel: '',
      roomID: '',
      quantityOfNights: 0,
      price: 0
    };
  },
  created() {
    this.fetchBookingData();
  },
  methods: {
    async fetchBookingData() {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/bookings/4');
        const data = await response.json();

        this.bookerName = data.BookerName;
        this.bookerPhone = data.BookerPhone;
        this.bookerEmail = data.BookerEmail;
        this.checkInDate = data['Check-inDate'];
        this.checkOutDate = data['Check-outDate'];
        this.hotelLocation = data['Location Hotel'];
        this.profileHotel = data.ProfileHotel;
        this.roomID = data.RoomID;
        this.quantityOfNights = data.QuantityofNights;
        this.price = data.Price;
      } catch (error) {
        console.error('Error fetching booking data:', error);
      }
    }
  }
};
</script>

<style scoped>
.container {
  font-family: Arial, sans-serif;
  width: 700px;
  background: white;
  margin: auto;
}

.invoice-details {
  margin-bottom: 20px;
}

.invoice-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.invoice-table th,
.invoice-table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.invoice-total {
  text-align: right;
  font-weight: bold;
  padding-top: 10px;
}

.invoice-footer {
  margin-top: 20px;
  text-align: center;
  border-top: 1px solid #ddd;
  padding-top: 10px;
}
</style>
