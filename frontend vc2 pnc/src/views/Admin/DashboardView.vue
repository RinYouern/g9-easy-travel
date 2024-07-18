<template>
  <link
    rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
  />

  <div class="container">
    <main>
      <div class="page-header">
        <h1>Dashboard</h1>
      </div>

      <div class="page-content">
        <div class="analytics">
          <div class="card">
            <div class="card-head">
              <h2>107,200</h2>
              <span class="las la-user"></span>
            </div>
            <div class="card-progress">
              <small>Passanger activity this month</small>
              <div class="card-indicator">
                <div class="indicator one" style="width: 60%"></div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-head">
              <h2>340,230</h2>
              <span class="las la-building"></span>
            </div>
            <div class="card-progress">
              <small>Hotels</small>
              <div class="card-indicator">
                <div class="indicator two" style="width: 80%"></div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-head">
              <h2>$653,200</h2>
              <span class="las la-dollar">$</span>
            </div>
            <div class="card-progress">
              <small>Earn</small>
              <div class="card-indicator">
                <div class="indicator three" style="width: 65%"></div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-head">
              <h2>47,500</h2>
              <span class="fa fa-bus"></span>
            </div>
            <div class="card-progress">
              <small>Bus</small>
              <div class="card-indicator">
                <div class="indicator four" style="width: 90%"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="records table-responsive">
          <div class="record-header">
            <div class="add">
              <span>Entries</span>
              <select name="" id="">
                <option value="">ID</option>
              </select>
              <button>Add record</button>
            </div>

            <div class="browse">
              <input type="search" placeholder="Search" class="record-search" />
              <select name="" id="">
                <option value="">Status</option>
              </select>
            </div>
          </div>

          <div>
            <table width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th><span class="las la-sort"></span> CLIENT</th>
                  <th><span class="las la-sort"></span> TOTAL</th>
                  <th><span class="las la-sort"></span> RETURN DATE</th>
                  <th><span class="las la-sort"></span> RETURN DATE</th>
                  <th><span class="las la-sort"></span> BALANCE</th>
                  <th><span class="las la-sort"></span> ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="client">
                      <div class="client-info">
                        <small>exty@crossover.org</small>
                      </div>
                    </div>
                  </td>
                  <td>$3171</td>
                  <td>19 April, 2022</td>
                  <td>19 April, 2022</td>
                  <td>-$205</td>
                  <td>
                    <div class="actions">
                      <span class="lab la-telegram-plane"></span>
                      <span class="las la-eye"></span>
                      <span class="las la-ellipsis-v"></span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="client">
                      <div class="client-info">
                        <small>exty@crossover.org</small>
                      </div>
                    </div>
                  </td>
                  <td>$2171</td>
                  <td>19 April, 2022</td>
                  <td>19 April, 2022</td>
                  <td>
                    <span class="paid">Paid</span>
                  </td>
                  <td>
                    <div class="actions">
                      <span class="lab la-telegram-plane"></span>
                      <span class="las la-eye"></span>
                      <span class="las la-ellipsis-v"></span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="client">
                      <div class="client-info">
                        <small>bruno@crossover.org</small>
                      </div>
                    </div>
                  </td>
                  <td>$3171</td>
                  <td>19 April, 2022</td>
                  <td>19 April, 2022</td>
                  <td>-$205</td>
                  <td>
                    <div class="actions">
                      <span class="lab la-telegram-plane"></span>
                      <span class="las la-eye"></span>
                      <span class="las la-ellipsis-v"></span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="client">
                      <div class="client-info">
                        <small>exty@crossover.org</small>
                      </div>
                    </div>
                  </td>
                  <td>$3171</td>

                  <td>19 April, 2022</td>
                  <td>19 April, 2022</td>
                  <td>
                    <span class="paid">Paid</span>
                  </td>
                  <td>
                    <div class="actions">
                      <span class="lab la-telegram-plane"></span>
                      <span class="las la-eye"></span>
                      <span class="las la-ellipsis-v"></span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>
                    <div class="client">
                      <div class="client-info">
                        <small>exty@crossover.org</small>
                      </div>
                    </div>
                  </td>
                  <td>$3171</td>
                  <td>19 April, 2022</td>
                  <td>19 April, 2022</td>
                  <td>-$205</td>
                  <td>
                    <div class="actions">
                      <span class="lab la-telegram-plane"></span>
                      <span class="las la-eye"></span>
                      <span class="las la-ellipsis-v"></span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </div>
  
</template>

<script>
export default {}
</script>

<style scoped>
.page-header {
  padding: 1.3rem 1rem;
  background: #e9edf2;
  border-bottom: 1px solid #dee2e8;
}

.page-header h1,
.page-header small {
  color: #74767d;
}

.page-content {
  padding: 1.3rem 1rem;
  background: #f1f4f9;
}

.analytics {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 2rem;
  margin-top: 0.5rem;
  margin-bottom: 2rem;
}

.card {
  box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 10%);
  background: #fff;
  padding: 1rem;
  border-radius: 3px;
}

.card-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card-head h2 {
  color: #333;
  font-size: 1.8rem;
  font-weight: 500;
}

.card-head span {
  font-size: 3.2rem;
  color: var(--text-grey);
}

.card-progress small {
  color: #777;
  font-size: 0.8rem;
  font-weight: 600;
}

.card-indicator {
  margin: 0.7rem 0rem;
  height: 10px;
  border-radius: 4px;
  background: #e9edf2;
  overflow: hidden;
}

.indicator {
  height: 10px;
  border-radius: 4px;
}

.indicator.one {
  background: red;
}

.indicator.two {
  background: #11a8c3;
}

.indicator.three {
  background: orange;
}

.indicator.four {
  background: blue;
}

.records {
  box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 10%);
  background: #fff;
  border-radius: 3px;
}

.record-header {
  padding: 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.add,
.browse {
  display: flex;
  align-items: center;
}

.add span {
  display: inline-block;
  margin-right: 0.6rem;
  font-size: 0.9rem;
  color: #666;
}

input,
button,
select {
  outline: none;
}

.add select,
.browse input,
.browse select {
  height: 35px;
  border: 1px solid #b0b0b0;
  border-radius: 3px;
  display: inline-block;
  width: 75px;
  padding: 0rem 0.5rem;
  margin-right: 0.8rem;
  color: #666;
}

.add button {
  background: var(--main-color);
  color: #fff;
  height: 37px;
  border-radius: 4px;
  padding: 0rem 1rem;
  border: none;
  font-weight: 600;
}

.browse input {
  width: 150px;
}

.browse select {
  width: 100px;
}

.table-responsive {
  width: 100%;
  overflow: auto;
}

table {
  border-collapse: collapse;
}

table thead tr {
  background: #e9edf2;
}

table thead th {
  padding: 1rem 0rem;
  text-align: left;
  color: #444;
  font-size: 0.9rem;
}

table thead th:first-child {
  padding-left: 1rem;
}

table tbody td {
  padding: 1rem 0rem;
  color: #444;
}

table tbody td:first-child {
  padding-left: 1rem;
  color: var(--main-color);
  font-weight: 600;
  font-size: 0.9rem;
}

table tbody tr {
  border-bottom: 1px solid #dee2e8;
}

.client {
  display: flex;
  align-items: center;
}

.client-img {
  margin-right: 0.5rem;
  border-radius: 50%;
  border: 2px solid #b0b0b0;
  height: 45px;
  width: 45px;
}

.client-info h4 {
  color: #555;
  font-size: 0.95rem;
}

.client-info small {
  color: #777;
}

.actions span {
  display: inline-block;
  font-size: 1.5rem;
  margin-right: 0.5rem;
}

.paid {
  display: inline-block;
  text-align: center;
  font-weight: 600;
  color: var(--main-color);
  background: #e5f8ed;
  padding: 0.5rem 1rem;
  border-radius: 20px;
  font-size: 0.8rem;
}
</style>