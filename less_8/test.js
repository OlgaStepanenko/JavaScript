describe('Функция включения кофемашины CoffeeMachine', function() {
	it('при достаточном количестве воды, кофе и максимальной температуре 40 градусов, кофе варится', function() {
		assert.equal(CoffeeMachine((waterAmount * waterHeatCapacity * maxTemp) / power, power)
	})
	it('при количестве воды >0', function() {
		assert.equal(checkWater(waterAmount, 0), checkWater)
	})	
	it('при количестве кофейных зерен >0', function() {
		assert.equal(checkBeans(coffeBeans, 0), checkBeans)
	})	
	it('количество воды равно 0', function() {
		assert.equal(launch(checkWater, 0), !checkWater)
	})
	it('количество кофе равно 0', function() {
		assert.equal(launch(checkBeans, 0), !checkBeans)
	})
})