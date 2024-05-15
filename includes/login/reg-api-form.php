<!-- API Interaction Form -->
<form class="form" id="register" method="post">
  <div class="form-group">
    <label for="organisationNumber">Organisasjonsnummer</label>
    <input type="text" id="organisationNumber" name="organisationNumber" class="form-control mb-3" placeholder="9-siffer">
  </div>
  <button type="submit" class="btn btn-danger">Fortsett</button>
  <input type="hidden" name="action" value="get_company_data_from_api">
</form>
