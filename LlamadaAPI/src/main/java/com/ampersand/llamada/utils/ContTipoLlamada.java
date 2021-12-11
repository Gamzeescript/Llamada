package com.ampersand.llamada.utils;

import java.util.List;

public interface ContTipoLlamada<T> {
	
	public List <T> gets();
	
	public T getById(Long id);
	
	public T registry(T r);
	
	public void clean(T e);


}
