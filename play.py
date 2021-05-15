@app.route('/reg.php', methods=['GET', 'POST'])
def reg.php():
    if request.method == 'POST':
        return("Hello")
    return render_template('index.html')		
