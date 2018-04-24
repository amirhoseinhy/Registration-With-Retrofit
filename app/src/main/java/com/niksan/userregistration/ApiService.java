package com.niksan.userregistration;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface ApiService {

    @FormUrlEncoded
    @POST("/user/index.php")
    Call<Student> insertData(@Field("name") String name, @Field("email") String email , @Field("password") String password);
}