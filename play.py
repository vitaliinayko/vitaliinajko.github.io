form = """
<form action="reg.php" method="post">
  	<div class="container">
    	<input type="text" placeholder="Enter name" name="name" required>
    	<input type="text" placeholder="Enter Email" name="email" required>
    	<input type="password" placeholder="Enter Password" name="psw" required>
    	<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    	<button type="submit" class="registerbtn">Регистрация</button>
  	</div>
</form>
"""

class MainPage(webapp2.RequestHandler):
	def get(self):
		self.response.out.write(form)
class TestHandler(webapp2.RequestHandler):
	def post(self):
		name = self.request.qet("name")
		self.response.out.write(name)
		email = self.request.qet("email")
		self.response.out.write(email)
		psw = self.request.qet("psw")
		self.response.out.write(psw)

		